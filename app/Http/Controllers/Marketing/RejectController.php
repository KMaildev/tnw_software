<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Models\InterestRate;
use App\Models\MarketingTeam;
use App\Models\PropertyType;
use App\Models\Region;
use App\Models\Reject;
use Illuminate\Http\Request;

class RejectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rejects = Reject::all();
        return view('marketing.reject.index', compact('rejects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $marketing_team = MarketingTeam::findOrFail($id);
        $interest_rates = InterestRate::all();
        $property_types = PropertyType::all();
        $regions = Region::all();
        return view('marketing.reject.edit', compact('marketing_team', 'interest_rates', 'property_types', 'regions'));
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
        $user_id = auth()->user()->id;
        $marketing = MarketingTeam::findOrFail($id);
        $marketing->reject_status = 'reject';
        $marketing->reject_date = $request->reject_date;
        $marketing->update();
        $marketing = $marketing->id;

        $reject = new Reject();
        $reject->reject_date = $request->reject_date;
        $reject->reject_reason = $request->reject_reason;
        $reject->marketing_team_id = $marketing;
        $reject->user_id = $user_id;
        $reject->save();
        return redirect()->back()->with('success', 'Your processing has been completed.');
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
