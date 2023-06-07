<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\Exports\InquiriesExport;
use Maatwebsite\Excel\Facades\Excel;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inquiries = Inquiry::all()->where('trash', false);
        return view('backend.modules.inquiry.index', compact('inquiries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
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
    


    public function export() 
    {
        // return 'test';
        return Excel::download(new InquiriesExport, 'inquiries.xlsx');
    }
    
    public function showTrash(Request $request)
    {
        $inquiries = Inquiry::all()->where('trash', true);
        return view('backend.modules.inquiries.trash', compact('inquiries'));
    }

    public function retrieveTrash(Request $request, $id) {
        $inquiry = Inquiry::find($id);
        $inquiry->trash = false;
        $inquiry->save();

        return back()->with('success', 'Successfully retrieved Inquiry');
    }
}
