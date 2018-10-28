<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('admin/login');
    }

    public function checkLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|min:4|max:20',
            'password' => 'required|min:6'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials) && Auth::user()->user_status == 1) {
            return redirect()->intended('admin');
        }

        return back()->with('error', 'Email or password is not correct!');
    }

    public function logout()
    {
        Auth::logout();    
        return view('admin/login');
    }
}
