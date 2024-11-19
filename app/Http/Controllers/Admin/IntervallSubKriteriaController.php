<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\IntervalSubKategoriModel;
use App\Models\Pos;
use Illuminate\Http\RedirectResponse;

class IntervallSubKriteriaController extends Controller {
    public function index(): View {
        $data = ([
            'interval' => IntervalSubKategoriModel::get(),

        ]);
    
        return view('admin.intervalsubkriteria', $data);

    }
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate(
            [
                'nama_interval' => 'required',
                'bobota_interval' => 'required',
            ]
        );

        IntervalSubKategoriModel::create(attributes: $data);
        return back()->with('success', 'Data Siswa Berhasil Ditambahkan!');
    }
    public function update(String $id, Request $request): RedirectResponse
    {
        $request->validate([
            'nama_interval' => 'required',
            'bobota_interval' => 'required',
        ]);
        $data = IntervalSubKategoriModel::find($id);
        $data->update([
            'nama_interval' => $request->nama_interval,
            'bobota_interval' => $request->bobota_interval,
        ]);
        return back()->with('success', 'Period Berhasil Diupdate');

    }
    public function destroy($id): RedirectResponse
    {
        $data = IntervalSubKategoriModel::find($id);
        $data->delete();
        return back()->with('success', 'Kategori berhasil dihapus.');

    }
}