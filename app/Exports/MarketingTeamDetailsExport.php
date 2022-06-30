<?php

namespace App\Exports;

use App\Models\MarketingTeam;
use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class MarketingTeamDetailsExport implements FromView
{

    public function __construct($marketing_edit)
    {
        $this->marketing_edit = $marketing_edit;
    }

    public function view(): View
    {
        return view('marketing.marketing_team.export.property_details_excel_export', [
            'marketing_edit' => $this->marketing_edit,
        ]);
    }
}
