<?php

namespace App\Http\Controllers\Direktur;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardDirekturController extends Controller
{
    public function index(): View
    {
        $name = Auth::user()->name;
        return view('direktur.dashboard',compact('name'));
    }
}
