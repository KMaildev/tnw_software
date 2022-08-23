<?php

namespace App\Imports;

use App\Models\MarketingTeam;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class MarketingTeamImport implements ToCollection, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function collection(Collection $rows)
    {
        $user_id = auth()->user()->id;
        Validator::make($rows->toArray(), [
            '*.marketing_date' => 'required',
            '*.no' => 'required',
            '*.name' => 'required',
        ])->validate();

        foreach ($rows as $row) {
            MarketingTeam::create([
                'marketing_date'     => strval($row['marketing_date']),
                'no'     => strval($row['no']),
                'ward_no'     => strval($row['ward_no']),
                'road'     => strval($row['road']),
                'wide'     => strval($row['wide']),
                'area_type'     => strval($row['area_type']),
                'permission'     => strval($row['permission']),
                'price'     => strval($row['price']),
                'currency'     => strval($row['currency']),
                'owner_or_agent_type'     => strval($row['owner_or_agent_type']),
                'name'     => strval($row['name']),
                'phone_no'     => strval($row['phone_no']),
                'email'     => strval($row['email']),
                'code'     => strval($row['code']),
                'remark'     => strval($row['remark']),
                'township_id'     => 1,
                'property_type_id'     => 1,
                'user_id'     => $user_id,


                'reject_status'     => NULL,
                'reject_date'     => NULL,
                'created_at'    => date('Y-m-d h:i:s'),
                'updated_at'    => date('Y-m-d h:i:s'),

                'interest_rate' => 0,
            ]);
        }
    }
}
