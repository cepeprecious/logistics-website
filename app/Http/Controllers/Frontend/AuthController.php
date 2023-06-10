<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login ()
    {
        if (Auth::check()) {
            if (Auth::user()->role === 'user') {
                return redirect('dashboard');
            }
        }

        return view('frontend.pages.login');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'username' => 'required|min:3|max:255|alpha_dash|unique:users',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required'
        ]);
      

        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
            'role' => 'user'
        ];

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'user'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('dashboard');
        } else {
            return back()->with('error', 'Your credentials are incorrect.')->withInput($request->input());
        }

      return back();
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
            'role' => 'user'
        ];

        if (Auth::attempt($credentials)) {
            return redirect('dashboard');
        } else {
            return back()->with('error', 'Your credentials are incorrect.')->withInput($request->input());
        }

        return back();
    }

    public function logout (Request $request)
    {
        Auth::logout();
        return redirect('login');
    }
}
