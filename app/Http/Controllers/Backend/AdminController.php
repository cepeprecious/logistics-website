<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

// Models
use App\Models\Inquiry;

// Exports
use App\Exports\InquiriesExport;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('backend.modules.dashboard.index');
    }

    public function orderManagement()
    {
        return view('backend.modules.order-management.index');
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
        // return 'test';
        return Excel::download(new InquiriesExport, 'inquiries.xlsx');
    }

    public function inquiryRetrieve(Request $request, $id) {
        $inquiry = Inquiry::find($id);
        $inquiry->trash = false;
        $inquiry->save();

        return back()->with('success', 'Successfully retrieved Inquiry');
    }
}
