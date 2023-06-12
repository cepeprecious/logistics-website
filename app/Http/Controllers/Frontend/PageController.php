<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\Models\Order;

class PageController extends Controller
{
    public function home() {
        return view('frontend.pages.home');
    }

    public function aboutUs() {
        return view('frontend.pages.about-us');
    }

    public function ourServices() {
        return view('frontend.pages.our-services');
    }

    public function faqs() {
        return view('frontend.pages.faqs');
    }

    public function blogs() {
        return view('frontend.pages.blogs');
    }

    public function blogsSingle() {
        return view('frontend.pages.blogs-single');
    }

    public function contactUs() {
        return view('frontend.pages.contact-us');
    }

    public function trackPackage() {
        
        return view('frontend.pages.track');
    }

    public function trackingPackage(Request $request) {

        $trackingNumber = $request->input('tracking_number');

        $trackingInfo = Order::where('tracking_number', $trackingNumber)->first();

        if ($trackingInfo) {
            $shipmentStatus = $trackingInfo->status;
            $dateTime = $trackingInfo->updated_at;
        } else {
            // Handle the case when tracking information is not found
            $shipmentStatus = 'Tracking information not found';
            $dateTime = null;
        }

        return back()
        ->with('trackingNumber', $trackingNumber)
        ->with('shipmentStatus', $shipmentStatus)
        ->with('dateTime', $dateTime);
    }

    public function login() {
        return view('frontend.pages.login');
    }

    public function register() {
        return view('frontend.pages.register');
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
