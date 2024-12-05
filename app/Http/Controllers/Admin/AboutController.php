<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutModel;
use App\Models\MemberModel;
use Illuminate\View\View;
use App\Models\Pos;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;



class AboutController extends Controller {
    public function index(): View {

        $data = ([
            'about' => AboutModel::where('id', '=', 1)->get(),
        ]);
  
        return view('admin.about', $data);

    }
    public function update(String $id, Request $request): RedirectResponse
    {
        $request->validate([
            'about' => 'required',
           
        ]);
        $data = AboutModel::find($id);
        $data->update([
            'about' => $request->about,
        ]);
        return back()->with('success', 'Tentang Berhasil Diupdate');

    }
}