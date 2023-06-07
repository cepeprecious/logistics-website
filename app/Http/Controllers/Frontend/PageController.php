<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inquiry;

class PageController extends Controller
{
    public function home(Request $request) {
        return view('frontend.pages.home');
    }

    public function aboutUs(Request $request) {
        return view('frontend.pages.about-us');
    }

    public function ourServices(Request $request) {
        return view('frontend.pages.our-services');
    }

    public function faqs(Request $request) {
        return view('frontend.pages.faqs');
    }

    public function blogs(Request $request) {
        return view('frontend.pages.blogs');
    }

    public function blogsSingle(Request $request) {
        return view('frontend.pages.blogs-single');
    }

    public function contactUs(Request $request) {
        return view('frontend.pages.contact-us');
    }

    public function trackPackage(Request $request) {
        return view('frontend.pages.track');
    }

    public function login(Request $request) {
        return view('frontend.pages.login');
    }

    public function register(Request $request) {
        return view('frontend.pages.register');
    }

    public function dashboard(Request $request) {
        return view('frontend.pages.user.dashboard');
    }

    public function inquiry(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required',
            'email_address' => 'required|email',
            'message' => 'required|min:10',
        ]);

        Inquiry::create([
            'name' => $validatedData['name'],
            'phone_number' => $request['phone_number'],
            'email_address' => $validatedData['email_address'],
            'message' => $validatedData['message'],
        ]);

        return response()->json(['success' => 'Sent message successfully']);
    }
}
