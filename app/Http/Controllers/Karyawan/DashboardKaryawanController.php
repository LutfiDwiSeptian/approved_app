<?php

namespace App\Http\Controllers\Karyawan;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardKaryawanController extends Controller
{
    public function index(): View
    {
        $name = Auth::user()->name;

        return view('karyawan.dashboard',compact('name'));
    }
}
