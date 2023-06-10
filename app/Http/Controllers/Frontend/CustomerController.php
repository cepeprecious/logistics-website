<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

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

    // public function shipmentTracking()
    // {
    //     return view('frontend.customer-panel.pages.shipment-tracking');
    // }

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

    // Customer Panel
    public function order(Request $request)
    {
        if ($request->has('order-submit')) {

            // Validate the form data
            $validatedData = $request->validate([
                'receiver-name' => 'required',
                'receiver-number' => 'required',
                'receiver-address' => 'required',
                'receiver-city' => 'required',
                'receiver-state' => 'required',
                'receiver-zip-code' => 'required',
                'sender-name' => 'required',
                'sender-number' => 'required',
                'sender-email' => 'required|email',
                'sender-address' => 'required',
                'sender-city' => 'required',
                'sender-state' => 'required',
                'sender-zip-code' => 'required',
                'delivery-options' => 'required',
                'item-category' => 'required',
                'weight' => 'required',
                'item-value' => 'required',
                'bags-specification' => 'required',
                'item-name' => 'required',
                'quantity' => 'required',
                'remarks' => 'required',

            ]);

            // Insert validated form data
            Order::create([
                'receiver_name' => $validatedData['receiver-name'],
                'receiver_number' => $validatedData['receiver-number'],
                'receiver_address' => $validatedData['receiver-address'],
                'receiver_city' => $validatedData['receiver-city'],
                'receiver_state' => $validatedData['receiver-state'],
                'receiver_zip_code' => $validatedData['receiver-zip-code'],
                'sender_name' => $validatedData['sender-name'],
                'sender_number' => $validatedData['sender-number'],
                'sender_email' => $validatedData['sender-email'],
                'sender_address' => $request['sender-address'],
                'sender_city' => $validatedData['sender-city'],
                'sender_state' => $validatedData['sender-state'],
                'sender_zip_code' => $validatedData['sender-zip-code'],
                'delivery_options' => $validatedData['delivery-options'],
                'item_name' => $validatedData['item-name'],
                'quantity' => $validatedData['quantity'],
                'item_category' => $validatedData['item-category'],
                'weight' => $validatedData['weight'],
                'item_value' => $validatedData['item-value'],
                'bags_specification' => $validatedData['bags-specification'],
                'remarks' => $validatedData['remarks'],
            ]);

            // Redirect back with success message
            return redirect()->back()->with('success', 'Form submitted successfully!');
            // return response()->json(['success' => 'Order submitted successfully!']);

        }
    }
}
