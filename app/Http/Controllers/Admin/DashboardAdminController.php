<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class DashboardAdminController extends Controller
{
    public function index(): View
    {
        $name = Auth::user()->name;
        $karyawan = User::paginate(10);
        return view('admin.adminpage',compact('name','karyawan'));
    }

    public function tambah(): View
    {
        return view('admin.tambah');
    }

    public function store(Request $request): RedirectResponse
    {

    }
}
