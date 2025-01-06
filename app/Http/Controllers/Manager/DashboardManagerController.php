<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardManagerController extends Controller
{
    public function index(): View
    {
        $name = Auth::user()->name;
        return view('manager.dashboard',compact('name'));
    }
}
