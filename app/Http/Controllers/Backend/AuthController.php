<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login ()
    {
        if (Auth::check()) {
            if (Auth::user()->role === 'admin') {
                return redirect('admin/dashboard');
            }
        }

        return view('backend.auth.login');
    }

    public function signIn (Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
            'role' => 'admin'
        ];

        if (Auth::attempt($credentials)) {
            return redirect('admin/dashboard');
        } else {
            return back()->with('error', 'Your credentials are incorrect.')->withInput($request->input());
        }

        return back();
    }

    public function logout (Request $request)
    {
        Auth::logout();
        return redirect('admin/login');
    }
}
