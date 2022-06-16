<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMarketingTeam;
use App\Models\InterestRate;
use App\Models\MarketingTeam;
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
        return view('marketing.marketing_team.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $interest_rates = InterestRate::all();
        return view('marketing.marketing_team.create', compact('interest_rates'));
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
        $marketing->code = $request->code;
        $marketing->remark = $request->remark;
        $marketing->interest_rate = $request->interest_rate;
        $marketing->user_id = $user_id ?? 0;
        $marketing->save();
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
}
