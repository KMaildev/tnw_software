<?php

namespace App\Http\Controllers\Marketing;

use App\Exports\MarketingTeamExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMarketingTeam;
use App\Imports\MarketingTeamImport;
use App\Models\Appointment;
use App\Models\FollowUp;
use App\Models\InterestRate;
use App\Models\MarketingTeam;
use App\Models\Models\MarketingFile;
use App\Models\Models\MarketingTeamCount;
use App\Models\PropertyType;
use App\Models\Region;
use App\Models\Township;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MarketingTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marketing_teams = MarketingTeam::where('reject_status', NULL)->get();
        return view('marketing.marketing_team.index', compact('marketing_teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $interest_rates = InterestRate::all();
        $property_types = PropertyType::all();
        $regions = Region::all();
        return view('marketing.marketing_team.create', compact('interest_rates', 'property_types', 'regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMarketingTeam $request)
    {
        $user_id = auth()->user()->id;

        // Generate Code
        $marketing_team_data_count = MarketingTeamCount::all();
        $code_count = count($marketing_team_data_count);
        $increment = 'TNW-' . sprintf('%06d', $code_count + 1);

        $marketing_team_data_count = new MarketingTeamCount();
        $marketing_team_data_count->offer_status = $request->offer_status ?? '';
        $marketing_team_data_count->code = $increment ?? '';
        $marketing_team_data_count->marketing_date = $request->marketing_date ?? '';
        $marketing_team_data_count->save();


        $marketing = new MarketingTeam();
        $marketing->offer_status = $request->offer_status ?? '';
        $marketing->code = $increment ?? '';
        $marketing->marketing_date = $request->marketing_date ?? '';
        $marketing->no = $request->no ?? '';
        $marketing->road = $request->road ?? '';
        $marketing->township_id = $request->township_id ?? '';
        $marketing->ward = $request->ward ?? '';
        $marketing->property_type_id = $request->property_type_id ?? '';
        $marketing->floor = $request->floor ?? '';
        $marketing->house_style = $request->house_style ?? '';
        $marketing->price = $request->price ?? '';
        $marketing->rent_offer_contract_status = $request->rent_offer_contract_status ?? '';
        $marketing->deposit_amount = $request->deposit_amount ?? '';
        $marketing->area_width = $request->area_width ?? '';
        $marketing->area_height = $request->area_height ?? '';
        $marketing->area = $request->area ?? '';
        $marketing->area_type = $request->area_type ?? '';
        $marketing->bcc_status = $request->bcc_status ?? '';
        $marketing->owner_status = $request->owner_status ?? '';
        $marketing->lift_status = $request->lift_status ?? '';
        $marketing->property_status = $request->property_status ?? '';
        $marketing->extra_charge = $request->extra_charge ?? '';
        $marketing->rooms = $request->rooms ?? '';
        $marketing->shrine = $request->shrine ?? '';
        $marketing->bathrooms = $request->bathrooms ?? '';
        $marketing->dining = $request->dining ?? '';
        $marketing->living = $request->living ?? '';
        $marketing->bedrooms = $request->bedrooms ?? '';
        $marketing->master_bedrooms = $request->master_bedrooms ?? '';
        $marketing->other_rooms = $request->other_rooms ?? '';
        $marketing->permission_type = $request->permission_type ?? '';
        $marketing->grant_type = $request->grant_type ?? '';
        $marketing->orginal_or_copy = $request->orginal_or_copy ?? '';
        $marketing->owner_agent = $request->owner_agent ?? '';
        $marketing->name = $request->name ?? '';
        $marketing->phone = $request->phone ?? '';
        $marketing->email = $request->email ?? '';
        $marketing->address = $request->address ?? '';
        $marketing->remark = $request->remark ?? '';
        $marketing->photo_status = 'no' ?? '';
        $marketing->user_id = $request->address ?? '';
        $marketing->reject_status = NULL;
        $marketing->user_id = $user_id ?? 0;
        $marketing->save();

        // $follow_up_status = $request->follow_up_status;
        // if ($follow_up_status) {
        //     $follow_up = new FollowUp();

        //     $follow_up->date_time = $request->date_time;

        //     $date_time = $request->date_time;
        //     $date = explode(" ", $date_time);
        //     $follow_up->follow_up_date = $date[0];

        //     $follow_up->follow_up_type = $request->follow_up_type;
        //     $follow_up->follow_up_remark = $request->follow_up_remark;
        //     $follow_up->additional_note = $request->additional_note;
        //     $follow_up->user_id = $user_id ?? 0;
        //     $follow_up->marketing_team_id = $marketing_team_id;
        //     $follow_up->save();
        // }


        // $appointment_status = $request->appointment_status;
        // if ($appointment_status) {
        //     $appointment = new Appointment();
        //     $appointment->appointment_date_time = $request->appointment_date_time;

        //     $date_time = $request->appointment_date_time;
        //     $date = explode(" ", $date_time);
        //     $appointment->appointment_date = $date[0];

        //     $appointment->appointment_person = $request->appointment_person;
        //     $appointment->appointment_location = $request->appointment_location;
        //     $appointment->appointment_remark = $request->appointment_remark;
        //     $appointment->user_id = $user_id ?? 0;
        //     $appointment->marketing_team_id = $marketing_team_id;
        //     $appointment->save();
        // }


        // if ($request->hasFile('files')) {
        //     foreach ($request->file('files') as $key => $file) {
        //         $path = $file->store('public/marketing_files');
        //         $original_name = $file->getClientOriginalName();

        //         $insert[$key]['photo'] = $path;
        //         $insert[$key]['original_name'] = $original_name;

        //         $insert[$key]['marketing_team_id'] = $marketing_team_id;
        //         $insert[$key]['user_id'] = auth()->user()->id;
        //         $insert[$key]['created_at'] =  date('Y-m-d H:i:s');
        //         $insert[$key]['updated_at'] =  date('Y-m-d H:i:s');
        //     }
        //     MarketingFile::insert($insert);
        // }

        return redirect()->back()->with('success', 'Your processing has been completed.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function already_live_filter_search(Request $request)
    {
        $No = $request->No;
        $WardNo = $request->WardNo;
        $Road = $request->Road;

        if ($No) {
            $marketing_data = MarketingTeam::where(['no' => $No])->get();
        }

        if ($WardNo) {
            $marketing_data = MarketingTeam::where(['ward' => $WardNo])->get();
        }

        if ($Road) {
            $marketing_data = MarketingTeam::where(['road' => $Road])->get();
        }

        if ($No && $WardNo && $Road) {
            $marketing_data = MarketingTeam::where([
                'no' => $No,
                'ward' => $WardNo,
                'road' => $Road,
            ])->get();
        }

        return json_encode($marketing_data);
    }


    /**
     * @return \Illuminate\Support\Collection
     */
    public function marketing_team_import()
    {
        Excel::import(new MarketingTeamImport, request()->file('file'));
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }



    /**
     * @return \Illuminate\Support\Collection
     */
    public function marketing_team_export()
    {
        $marketing_teams = MarketingTeam::where('reject_status', NULL)->get();
        return Excel::download(new MarketingTeamExport($marketing_teams), 'marketing_team_' . date("Y-m-d H:i:s") . '.xlsx');
    }
}
