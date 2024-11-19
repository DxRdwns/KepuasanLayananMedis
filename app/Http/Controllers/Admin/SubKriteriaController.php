<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubKategoriModel;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\KategoriModel;
use Illuminate\Http\RedirectResponse;

use App\Models\Pos;

class SubKriteriaController extends Controller {
    public function index(): View {
        $data = ([
            'subkategori' => SubKategoriModel::get(),
            'kategori' => KategoriModel::get(),

        ]);
    
        return view('admin.subkriteria' , $data);

    }
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'nama_subkategori' => 'required',
                'id_kategori' => 'required',
            ]
        );

        SubKategoriModel::create(attributes: $data);
        return back()->with('success', 'Data Siswa Berhasil Ditambahkan!');
    }
    public function update(String $id, Request $request): RedirectResponse {
    
        $request->validate([
            'nama_subkategori' => 'required',
                'id_kategori' => 'required',
        ]);
        $data = SubKategoriModel::find($id);
        $data->update([
            'nama_subkategori' => $request->nama_subkategori,
                'id_kategori' => $request->id_kategori,
        ]);
        return back()->with('success', 'Period Berhasil Diupdate');

    }
    public function destroy($id): RedirectResponse
    {
        $data = SubKategoriModel::find($id);
        $data->delete();
        return back()->with('success', 'Kategori berhasil dihapus.');
    }
}