<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

// Models
use App\Models\Inquiry;
use App\Models\Order;
use App\Models\User;

// Exports
use App\Exports\InquiriesExport;
use App\Exports\OrdersExport;


class AdminController extends Controller
{
    public function dashboard()
    {
        $orders = Order::count();
        $users = User::where('role', 'user')->count();
        return view('backend.modules.dashboard.index', compact('orders', 'users'));
    }

    public function orderManagement()
    {
        $orders = Order::all();
        return view('backend.modules.order-management.index', compact('orders'));
    }

    public function customerManagement()
    {
        return view('backend.modules.customer-management.index');
    }

    public function driveAndDeliveryPersonnelManagement()
    {
        return view('backend.modules.drive-and-delivery-personnel-management.index');
    }

    public function settingsAndConfiguration()
    {
        return view('backend.modules.settings-and-configuration.index');
    }



    // ADMIN FUNCTIONS
    public function orderUpdate(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|integer',
            'status' => 'required|in:"Pending",
            "Order Received",
            "Order Processing",
            "To be Shipped",
            "Order Shipped",
            "In Transit",
            "Out for Delivery",
            "Delivery Attempted",
            "Delivered"',
        ]);

        // Find of the order by ID
        $order = Order::find($validatedData['id']);

        // Change to satus to validated status data
        $order->status = $validatedData['status'];

        // Save the changes on Order Model
        $order->save();

        return back()->with('success', "Successfully updated order with tracking number ({$order->tracking_number})");
    }

    public function orderExport()
    {
        return Excel::download(new OrdersExport, 'orders.xlsx');
    }

    public function orderChart()
    {
        $pending = Order::where('status', 'Pending')->count();
        $order_received = Order::where('status', 'Order Received')->count();
        $order_processing = Order::where('status', 'Order Processing')->count();
        $to_be_shipped = Order::where('status', 'To be Shipped')->count();
        $order_shipped = Order::where('status', 'Order Shipped')->count();
        $in_transit = Order::where('status', 'In Transit')->count();
        $out_for_delivery = Order::where('status', 'Out for Delivery')->count();
        $delivery_attempted = Order::where('status', 'Delivery Attempted')->count();
        $delivered = Order::where('status', 'Delivered')->count();

        $response = [
            'pending' => $pending,
            'order_received' => $order_received,
            'order_processing' => $order_processing,
            'to_be_shipped' => $to_be_shipped,
            'order_shipped' => $order_shipped,
            'in_transit' => $in_transit,
            'out_for_delivery' => $out_for_delivery,
            'delivery_attempted' => $delivery_attempted,
            'delivered' => $delivered,
        ];

        return response()->json($response);
    }


    // CMS
    public function inquiry()
    {
        $inquiries = Inquiry::all()->where('trash', false);
        return view('backend.modules.inquiry.index', compact('inquiries'));
    }

    public function trashInquiry()
    {
        $inquiries = Inquiry::all()->where('trash', true);
        return view('backend.modules.inquiries.trash', compact('inquiries'));
    }

    public function inquiryDelete(string $id)
    {
        // Marks inquiry as trash
        $banner = Inquiry::find($id);
        if ($banner->trash == false) {
            $banner->trash = true;
            $banner->save();
        }
        else {
            $banner->delete();
        }

        return back()->with('success', 'Successfully deleted Inquiry.');
    }

    public function inquiryExport() 
    {
        return Excel::download(new InquiriesExport, 'inquiries.xlsx');
    }

    public function inquiryRetrieve(Request $request, $id) {
        $inquiry = Inquiry::find($id);
        $inquiry->trash = false;
        $inquiry->save();

        return back()->with('success', 'Successfully retrieved Inquiry');
    }
}
