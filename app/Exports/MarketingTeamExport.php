<?php

namespace App\Exports;

use App\Models\MarketingTeam;
use Maatwebsite\Excel\Concerns\FromCollection;

class MarketingTeamExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MarketingTeam::all();
    }
}
