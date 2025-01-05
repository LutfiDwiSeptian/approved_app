<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAuthVerifyRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() 
    {
        return view('auth.login');
    }

    public function verify(UserAuthVerifyRequest $request): RedirectResponse 
    {
        $data = $request->validated();

        if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password'],'role'=>'admin'])){
            $request->session()->regenerate();
            return redirect()->intended('/admin/home');
        } else if (Auth::guard('direktur')->attempt(['email'=>$data['email'], 'password'=>$data['password'],'role'=>'direktur'])){
            $request->session()->regenerate();
            return redirect()->intended('/direktur/home');
        } else if (Auth::guard('manager')->attempt(['email'=>$data['email'], 'password'=>$data['password'],'role'=>'manager'])){
            $request->session()->regenerate();
            return redirect()->intended('/manager/home');
        } else if (Auth::guard('karyawan')->attempt(['email'=>$data['email'], 'password'=>$data['password'],'role'=>'karyawan'])){
            $request->session()->regenerate();
            return redirect()->intended('/karyawan/home');
        } else {
            return redirect(route('login'))->with('msg','Email/Password salah coba lagi');
        }

    }

    public function logout(): RedirectResponse
    {
        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
        } else if (Auth::guard('direktur')->check()){
            Auth::guard('direktur')->logout();
        }else if (Auth::guard('manager')->check()){
            Auth::guard('manager')->logout();
        }else if (Auth::guard('karyawan')->check()){
            Auth::guard('karyawan')->logout();
        }
        return redirect('login');
    }
}
