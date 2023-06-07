<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function dashboard()
    {
        return view('frontend.customer-panel.pages.dashboard');
    }

    public function createOrder()
    {
        return view('frontend.customer-panel.pages.create-order');
    }

    public function orderStatus()
    {
        return view('frontend.customer-panel.pages.order-status');
    }

    public function shipmentTracking()
    {
        return view('frontend.customer-panel.pages.shipment-tracking');
    }

    public function orderHistory()
    {
        return view('frontend.customer-panel.pages.order-history');
    }

    public function addressBook()
    {
        return view('frontend.customer-panel.pages.address-book');
    }

    public function personalProfile()
    {
        return view('frontend.customer-panel.pages.personal-profile');
    }
}
