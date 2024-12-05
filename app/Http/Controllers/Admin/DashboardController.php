<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MemberModel;
use Illuminate\View\View;
use App\Models\Pos;

class DashboardController extends Controller {
    public function index(): View {
        $data = ([
            'all' => MemberModel::whereNotNull('score')->count(),
            'sangat_puas' => MemberModel::whereNotNull('quality')->where('quality', 'Sangat Puas')->count(),
            'puas' => MemberModel::whereNotNull('quality')->where('quality', 'Puas')->count(),
            'cukup_puas' => MemberModel::whereNotNull('quality')->where('quality', 'Cukup Puas')->count(),
            'tidak_puas' => MemberModel::whereNotNull('quality')->where('quality', 'Tidak Puas')->count(),
            'sangat_tidak_puas' => MemberModel::whereNotNull('quality')->where('quality', 'Sangat Tidak Puas')->count(),

        ]);
        
  
        return view('admin.dashboard', $data);

    }
}