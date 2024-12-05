<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\KategoriModel;
use App\Models\SubKategoriModel;
use Illuminate\Http\RedirectResponse;

use App\Models\Pos;

class KriteriaController extends Controller {
    public function index(): View {
        $data = ([
            'kriteria' => KategoriModel::get(),
            
        ]);
    
        return view('admin.kriteria', $data);

    }
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate(
            [
                'name_kategori' => 'required',
                
            ]
        );

        KategoriModel::create(attributes: $data);
        return back()->with('success', 'Data Siswa Berhasil Ditambahkan!');
    }
public function destroy(string $id): RedirectResponse
{
    // Mencari data kategori berdasarkan ID
    $kategori = KategoriModel::find($id);

    // Memeriksa apakah kategori ditemukan
    if (!$kategori) {
        return back()->with('error', 'Kategori tidak ditemukan.');
    }

    // Menghapus subkategori yang terkait
    $subKategori = SubKategoriModel::where('id_kategori', $id);
    if ($subKategori->exists()) {
        $subKategori->delete();
    }

    // Menghapus kategori
    $kategori->delete();

    // Mengembalikan respon dengan pesan sukses
    return back()->with('success', 'Kategori dan subkategori terkait berhasil dihapus.');
}

     public function update(String $id, Request $request): RedirectResponse
    {
        $request->validate([
            'name_kategori' => 'required',
           
        ]);
        $data = KategoriModel::find($id);
        $data->update([
            'name_kategori' => $request->name_kategori,
        ]);
        return back()->with('success', 'Period Berhasil Diupdate');

    }
}