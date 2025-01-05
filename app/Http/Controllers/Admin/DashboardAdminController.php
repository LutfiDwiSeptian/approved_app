<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardAdminController extends Controller
{
    public function index(): View 
    {
        $name = Auth::user()->name;

        return view('admin.adminpage',compact('name'));
    }
}
