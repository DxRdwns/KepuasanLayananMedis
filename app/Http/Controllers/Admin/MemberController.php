<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MemberModel;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Pos;

class MemberController extends Controller {
    public function index(): View {

        $data = ([
            'member' => MemberModel::get()
        ]);
        return view('admin.member', $data);

    }
    public function addmember(Request $request)
    {
        $data= $request->validate([
            'name' => 'required', 
            'email' => 'required', 
            'provinsi' => 'required', 
            'kab_kota' => 'required',]);
        MemberModel::create($data);
        return redirect('/questionnaire/question');
    }
}