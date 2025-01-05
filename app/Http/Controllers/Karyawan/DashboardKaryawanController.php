<?php

namespace App\Http\Controllers\Karyawan;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardKaryawanController extends Controller
{
    public function index(): View
    {
        return view('karyawan.dashboard');
    }
}
