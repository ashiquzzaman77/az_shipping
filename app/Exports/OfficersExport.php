<?php

namespace App\Exports;

use App\Models\Officer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OfficersExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */

    // public function collection()
    // {
    //     return Officer::all();
    // }

    public function collection()
    {
        return Officer::select("name", "officer_type", "rank", "cdc_no", "contact", "passport_number", "status", "ship_name", "remarks", "academy", "batch", "cdc", "coc", "goc", "sid", "ph", "pst", "fpff", "efa", "pssr", "sat", "dsd", "pscrb", "Edh", "radar_navigation", "aff", "mfa", "madical_care", "ens", "sso", "brm", "hvs", "ship_simulation", "ecdis", "atoto", "cor", "passport", "covid", "readiness", "discharge_date", "end_of_contract", "other_one", "other_two", "other_three", "other_four")->get();
    }

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function headings(): array
    {
        return [
            "NAME",
            "OFFICER TYPE",
            "RANK",
            "CDC NO",
            "CONTACT",
            "PASSPORT NUMBER",
            "STATUS",
            "SHIP NAME",
            "REMARKS",
            "ACADEMY",
            "BATCH",
            "CDC",
            "COC",
            "GOC",
            "SID",
            "PH",
            "PST",
            "FPFF",
            "EFA",
            "PSSR",
            "SAT",
            "DSD",
            "PSCRB",
            "EDH",
            "RADAR NAVIGATION",
            "AFF",
            "MFA",
            "MEDICAL CARE",
            "ENS",
            "SSO",
            "BRM",
            "HVS",
            "SHIP SIMULATION",
            "ECDIS",
            "ATOTO",
            "COR",
            "PASSPORT",
            "COVID VACCINATION",
            "READINESS",
            "DISCHARGE DATE",
            "END OF CONTRACT",
            "VALUE ADDED COURSE",
            "OTHER TWO",
            "OTHER THREE",
            "OTHER FOUR",
        ];
    }
}
