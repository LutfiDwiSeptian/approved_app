<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardManagerController extends Controller
{
    public function index(): View
    {
        return view('manager.dashboard');
    }
}
