<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Direktur\DashboardDirekturController;
use App\Http\Controllers\Karyawan\DashboardKaryawanController;
use App\Http\Controllers\Manager\DashboardManagerController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/login',[AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'verify'])->name('auth.verify');


Route::group(['middleware'=>'auth:admin'], function(){
    Route::get('/admin/home', [DashboardAdminController::class, 'index'])->name('admin.adminpage.index');

});
Route::group(['middleware'=>'auth:direktur'], function(){
    Route::get('/direktur/home', [DashboardDirekturController::class, 'index'])->name('direktur.dashboard.index');
    
});
Route::group(['middleware'=>'auth:manager'], function(){
    Route::get('/manager/home', [DashboardManagerController::class, 'index'])->name('manager.dashboard.index');
    
});
Route::group(['middleware'=>'auth:karyawan'], function(){
    Route::get('/karyawan/home',[DashboardKaryawanController::class, 'index'])->name('karyawan.dashboard.index');
    
});

Route::get('logout', [Authcontroller::class,'logout'])->name('logout');