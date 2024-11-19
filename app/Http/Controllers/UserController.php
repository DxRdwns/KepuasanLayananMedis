<?php

namespace App\Http\Controllers;

use App\Models\IntervalSubKategoriModel;
use App\Models\KategoriModel;
use App\Models\MemberModel;
use App\Models\SubKategoriModel;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function home(): View
    {
        return view('user.index');
    }
    public function petunjuk(): View
    {
        return view('user.petunjuk');
    }
    public function questionnaire(): View
    {
        return view('user.kinerjalayananmedis'); 
    }
    
    public function question(): View
    {
        $data = ([
            'kategori' => KategoriModel::get(),
            'intsub' => SubKategoriModel::get(),
            'bobot' => IntervalSubKategoriModel::get(), 
        ]);
        return view('user.question', $data); 
    }
    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'question' => 'required|array',
        'name' => 'required',
        'email' => 'required',
        'provinsi' => 'required',
        'kab_kota' => 'required',
    ]);

    // Simpan data pertanyaan dan bobot sementara di session
    $feedbackData = [];

    foreach ($request->question as $index => $question) {
        // Ambil bobot berdasarkan indeks
        $bobotKey = 'bobot_' . $index;
        $bobotValue = $request->input($bobotKey);

        $feedbackData[] = [
            'subkategori' => $question,
            'id_kategori' => $bobotValue,
            'name' => $request->name,
            'email' => $request->email,
            'provinsi' => $request->provinsi,
            'kab_kota' => $request->kab_kota,
            
        ];
    }

    // Simpan ke session
    session(['feedback_data' => $feedbackData]);

    // Redirect ke halaman hasil
    return redirect()->route('feedback.result'); // Rute untuk menampilkan hasil
}
public function result()
{
    // Ambil data dari session
    $feedbackData = session('feedback_data', []);

    // Menginisialisasi total
    $totalNilai = 0;

    // Melakukan loop untuk menjumlahkan nilai
    foreach ($feedbackData as $data) {
        $totalNilai += $data['id_kategori'];

        
    }

    $hitBobot = [];
    foreach ($feedbackData as $data) {
    $idKategori = $data['id_kategori'];
    // Hitung bobot, pastikan tidak ada pembagian dengan 0
    $hitBobot[$idKategori] = $totalNilai ? ($idKategori / $totalNilai) : 0; 
    }
                                    
    // Normalisasi
$datainterval = IntervalSubKategoriModel::get(); // Ambil data dari model
$nilaiTertinggi = $datainterval->max('bobota_interval'); // Nilai tertinggi dari kolom bobot_interval
$nilaiTerendah = $datainterval->min('bobota_interval'); // Nilai terendah dari kolom bobot_interval

$hitNorm = []; // Array untuk menyimpan hasil normalisasi

foreach ($feedbackData as $data) {
    $datpil = $data['id_kategori']; // Ambil id_kategori

    // Hitung nilai atas
    $atas = $datpil - $nilaiTerendah; 
    // Hitung nilai bawah
    $bawah = $nilaiTertinggi - $nilaiTerendah; 

    // Hitung normalisasi jika $bawah tidak nol untuk menghindari pembagian dengan nol
    if ($bawah !== 0) {
        $bagi = $atas / $bawah; // Normalisasi
        $hasil = $bagi; // Hasil akhir dalam persen
        $hitNorm[$datpil] = $hasil; // Simpan hasil ke array dengan id_kategori sebagai kunci
    } else {
        // Jika $bawah nol, set hasil ke 0 atau tangani sesuai kebutuhan
        $hitNorm[$datpil] = 0; // Atau logika lain jika diperlukan
    }
}

// Menghitung nilai akhir
 $totalNilaiAkhir = 0;
    $nilaiAkhir = []; // Array untuk menyimpan nilai akhir
    foreach ($feedbackData as $data) {
        $datpil = $data['id_kategori'];

        // Periksa apakah hitBobot dan hitNorm memiliki nilai untuk datpil
        if (isset($hitBobot[$datpil]) && isset($hitNorm[$datpil])) {
            $nilaiAkhir[$datpil] = $hitBobot[$datpil] * $hitNorm[$datpil]; // Hitung nilai akhir
        } else {
            $nilaiAkhir[$datpil] = 0; // Atau tangani sesuai kebutuhan jika tidak ada data
        }
        $totalNilaiAkhir += $nilaiAkhir[$datpil];
    }
// Hitung persentase dari $totalNilaiAkhir
// Mendapatkan bagian desimal dari $totalNilaiAkhir
$nilaiDesimal = substr(number_format($totalNilaiAkhir, 2), strpos(number_format($totalNilaiAkhir, 2), '.') + 1);

// Tentukan keterangan berdasarkan nilai
$keterangan = '';
if ($nilaiDesimal <= 20) {
    $keterangan = 'Sangat Tidak Puas';
} elseif ($nilaiDesimal <= 40) {
    $keterangan = 'Tidak Puas';
} elseif ($nilaiDesimal <= 60) {
    $keterangan = 'Cukup Puas';
} elseif ($nilaiDesimal <= 80) {
    $keterangan = 'Puas';
} else {
    $keterangan = 'Sangat Puas';
}

$mem = ([
   'name' => $feedbackData[0]['name'],
    'email' => $feedbackData[0]['email'],
    'provinsi' => $feedbackData[0]['provinsi'],
    'kab_kota' => $feedbackData[0]['kab_kota'],
]);
        MemberModel::create($mem);
    // Tampilkan view hasil
    return view('user.hasil', compact('feedbackData','totalNilaiAkhir','nilaiDesimal','keterangan','nilaiAkhir','hitNorm', 'totalNilai', 'hitBobot'));
}


}