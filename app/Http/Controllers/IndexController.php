<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('logout');
        date_default_timezone_set('Asia/Ho_Chi_Minh');
    }

    public function login(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password, 'user_status' => 1])) {
            return redirect()->home();
        }
            session()->flash('authFail', 'Your credentials are incorrect, or your account has been deleted. Please try again.');
            return redirect()->back();
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('index');
    }

    public function index()
    {
        return view('index');
    }


}
