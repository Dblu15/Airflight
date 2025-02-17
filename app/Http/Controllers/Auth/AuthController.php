<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (Auth::attempt($credentials)) {
            return redirect('/home'); // Chuyển hướng tới trang sau khi đăng nhập thành công
        }
        return redirect('/user/list');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with(['msg' => ['icon' => "success", 'title' => "Đăng xuất thành công"]]);
    }
}
