<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
