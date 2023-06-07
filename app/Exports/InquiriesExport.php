<?php

namespace App\Exports;

use App\Models\Inquiry;
use Maatwebsite\Excel\Concerns\FromCollection;

class InquiriesExport implements FromCollection
{
    public function collection()
    {
        return Inquiry::all()->where('trash', false);
    }
}
