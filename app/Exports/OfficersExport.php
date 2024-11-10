<?php

namespace App\Exports;

use App\Models\Officer;
use Maatwebsite\Excel\Concerns\FromCollection;

class OfficersExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Officer::all();
    }

    // Define custom headings (field names)
    public function headings(): array
    {
        return [
            'ID',              // Column 1: Officer ID
            'Officer Type',    // Column 2: Officer Type
            'Name',            // Column 3: Officer Name
            'Rank',            // Column 4: Rank
            'CDC No',          // Column 5: CDC Number
            'Academy',         // Column 6: Academy
            'Batch',           // Column 7: Batch
            'Contact',         // Column 8: Contact Number
            'Status',          // Column 9: Status (e.g. On Board, On Leave)
            'Remarks',         // Column 10: Remarks
        ];
    }

    // Map the data (this will return the actual data for each officer)
    public function map($officer): array
    {
        return [
            $officer->id,                  // Officer ID
            $officer->officer_type,         // Officer Type (e.g., Deck Officer, Engine Officer)
            $officer->name,                 // Officer's Name
            $officer->rank,                 // Officer's Rank
            $officer->cdc_no,               // Officer's CDC No.
            $officer->academy,              // Officer's Academy
            $officer->batch,                // Officer's Batch
            $officer->contact,              // Officer's Contact Number
            $officer->status,               // Officer's Status (On Board, Leave, etc.)
            $officer->remarks,              // Officer's Remarks
        ];
    }
}
