<?php

namespace App\Exports;


use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class MarketingTeamExport implements FromView
{

    public function __construct($marketing_teams)
    {
        $this->marketing_teams = $marketing_teams;
    }

    public function view(): View
    {
        return view('marketing.marketing_team.export.excel_export', [
            'marketing_teams' => $this->marketing_teams,
        ]);
    }
}
