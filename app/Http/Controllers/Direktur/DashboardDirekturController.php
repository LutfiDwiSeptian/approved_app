<?php

namespace App\Http\Controllers\Direktur;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardDirekturController extends Controller
{
    public function index(): View
    {
        return view('direktur.dashboard');
    }
}
