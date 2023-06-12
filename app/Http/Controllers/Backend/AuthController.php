<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// Models
use App\Models\User;

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

    public function updateUsername(Request $request)
    {
        // Validate the request data
        $request->validate([
            'username' => 'required|string|max:255',
        ]);

        // Update the username in the database
        $user = User::find(auth()->user()->id);
        $user->username = $request->input('username');
        $user->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Username updated successfully.');
    }

    public function updateEmail(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email|max:255',
        ]);

        // Update the email in the database
        $user = User::find(auth()->user()->id);
        $user->email = $request->input('email');
        $user->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Email updated successfully.');
    }

    public function updatePhoneNumber(Request $request)
    {
        // Validate the request data
        $request->validate([
            'phone_number' => 'required|string|max:255',
        ]);

        // Update the phone number in the database
        $user = User::find(auth()->user()->id);
        $user->phone_number = $request->input('phone_number');
        $user->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Phone number updated successfully.');
    }

    public function changePassword(Request $request) {
        $validatedData = $request->validate([
            'password' => 'required',
            'new_password' => 'required|confirmed|min:8',
        ]);
        if (Hash::check($validatedData['password'], auth()->user()->password)) {
            $user = User::find(auth()->user()->id);
            $user->password = Hash::make($validatedData['new_password']);
            $user->save();
            return back()->with('success', 'Password is changed successfully');
        } else {
            return back()->with('error', 'Incorrect password');
        }
    }
}
