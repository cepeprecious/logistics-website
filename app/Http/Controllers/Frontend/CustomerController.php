<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Http\Controllers\Frontend;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    public function dashboard()
    {
        $totalOrders = Order::where('user_id', auth()->user()->id)->count();
        $deliveredOrdersCount = Order::where('status', 'delivered')->where('user_id', auth()->user()->id)->count();
        $notDeliveredOrdersCount = $totalOrders - $deliveredOrdersCount;

        return view('frontend.customer-panel.pages.dashboard', compact('totalOrders', 'deliveredOrdersCount', 'notDeliveredOrdersCount'));
        
    }

    public function createOrder()
    {
        return view('frontend.customer-panel.pages.create-order');
    }

    public function orderStatus()
    {
        $orders = Order::all()->where('user_id', auth()->user()->id);
        return view('frontend.customer-panel.pages.order-status', compact('orders'));
    }

    public function trackingNumber()
    {
        return view('frontend.customer-panel.pages.tracking-number');
    }

    // public function personalProfile()
    // {
    //     $user = Auth::user();

    //     return view('frontend.customer-panel.pages.personal-profile');
    // }

    // Customer Panel
    public function order(Request $request)
    {
        if ($request->has('order-submit')) {

            // Validate the form data
            $validatedData = $request->validate([
                'receiver-name' => 'required',
                'receiver-number' => ['required', 'regex:/^(09|\+639)\d{9}$/'],
                'receiver-address' => 'required',
                'receiver-city' => 'required',
                'receiver-state' => 'required',
                'receiver-zip-code' => 'required',
                'sender-name' => 'required',
                'sender-number' => ['required', 'regex:/^(09|\+639)\d{9}$/'],
                'sender-email' => 'required|email',
                'sender-address' => 'required',
                'sender-city' => 'required',
                'sender-state' => 'required',
                'sender-zip-code' => 'required',
                'delivery-options' => 'required',
                'item-category' => 'required',
                'weight' => 'required|integer',
                'item-value' => 'required',
                'bags-specification' => 'required',
                'item-name' => 'required',
                'quantity' => 'required|integer',
                'remarks' => '',
            ]);

            $fee = $request->input('fee');

            // Insert validated form data
            $order = Order::create([
                'user_id' => auth()->user()->id,
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
                'fee' => $fee,
                'item_name' => $validatedData['item-name'],
                'quantity' => $validatedData['quantity'],
                'item_category' => $validatedData['item-category'],
                'weight' => $validatedData['weight'],
                'item_value' => $validatedData['item-value'],
                'bags_specification' => $validatedData['bags-specification'],
                'remarks' => $validatedData['remarks'],
            ]);

            // Retrieve the status value from the request
            $status = $request->input('status');

            // Set the status on the order object
            $order->status = $status;

            // Generate a tracking number (you can customize this based on your requirements)
            do {
                $trackingNumber = 'TRK' . strtoupper(Str::random(8));
            } while (Order::where('tracking_number', $trackingNumber)->exists());

            // Update the created order with the tracking number
            $order->tracking_number = $trackingNumber;
            $order->save();

            // Redirect back with success message
            // return redirect()->back()->with('success', 'Form submitted successfully!');
            // return redirect('/tracking-number')->with('success', 'Form submitted successfully!');

            // Redirect to the tracking page with the success message and tracking number
            return redirect('/tracking-number')->with([
                'success' => 'Form submitted successfully!',
                'trackingNumber' => $trackingNumber,
            ]);
        }
    }

    public function track(Request $request)
    {
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

        return view('track-package', compact('shipmentStatus', 'dateTime'));
    }
}
