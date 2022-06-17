<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMarketingTeam;
use App\Models\Appointment;
use App\Models\FollowUp;
use App\Models\InterestRate;
use App\Models\MarketingTeam;
use App\Models\PropertyType;
use App\Models\Region;
use App\Models\Township;
use Illuminate\Http\Request;

class MarketingTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marketing_teams = MarketingTeam::all();
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
        $region = Region::all();
        $township = Township::all();
        return view('marketing.marketing_team.create', compact('interest_rates', 'property_types', 'region', 'township'));
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
        $marketing = new MarketingTeam();
        $marketing->marketing_date = $request->marketing_date;
        $marketing->ward_no = $request->ward_no;
        $marketing->road = $request->road;
        $marketing->wide = $request->wide;
        $marketing->permission = $request->permission;
        $marketing->type = $request->type;
        $marketing->price = $request->price;
        $marketing->owner_or_agent_type = $request->owner_or_agent_type;
        $marketing->name = $request->name;
        $marketing->phone_no = $request->phone_no;
        $marketing->email = $request->email;
        $marketing->code = $request->code;
        $marketing->remark = $request->remark;
        $marketing->interest_rate = $request->interest_rate;
        $marketing->user_id = $user_id ?? 0;
        $marketing->save();
        $marketing_team_id = $marketing->id;

        $follow_up_status = $request->follow_up_status;
        if ($follow_up_status) {
            $follow_up = new FollowUp();

            $follow_up->date_time = $request->date_time;

            $date_time = $request->date_time;
            $date = explode(" ", $date_time);
            $follow_up->follow_up_date = $date[0];

            $follow_up->follow_up_type = $request->follow_up_type;
            $follow_up->follow_up_remark = $request->follow_up_remark;
            $follow_up->additional_note = $request->additional_note;
            $follow_up->user_id = $user_id ?? 0;
            $follow_up->marketing_team_id = $marketing_team_id;
            $follow_up->save();
        }


        $appointment_status = $request->appointment_status;
        if ($appointment_status) {
            $appointment = new Appointment();
            $appointment->appointment_date_time = $request->appointment_date_time;

            $date_time = $request->appointment_date_time;
            $date = explode(" ", $date_time);
            $appointment->appointment_date = $date[0];

            $appointment->appointment_person = $request->appointment_person;
            $appointment->appointment_location = $request->appointment_location;
            $appointment->appointment_remark = $request->appointment_remark;
            $appointment->user_id = $user_id ?? 0;
            $appointment->marketing_team_id = $marketing_team_id;
            $appointment->save();
        }
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
        $marketing = (new MarketingTeam())->newQuery();

        $WardNo = $request->WardNo;
        $Road = $request->Road;
        if ($WardNo) {
            $marketing->where('ward_no', $WardNo);
        }

        if ($Road) {
            $marketing->where('road', $Road);
        }

        $marketing_data = $marketing->get();
        return json_encode($marketing_data);

        // return json_encode(array(
        //     "statusCode" => 200,
        //     "marketing_data" => $data,
        // ));
    }
}
