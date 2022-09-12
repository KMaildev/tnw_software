<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreViewedProperty;
use App\Models\Models\ViewedProperty;
use App\Models\Models\WantToBuy;
use Illuminate\Http\Request;

class ViewedPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function CreateViewedProperty($id)
    {
        $want_to_buy = WantToBuy::findOrFail($id);
        $viewed_properties = ViewedProperty::where(['want_to_buy_id' => $id])->get();
        return view('marketing.viewed_property.create', compact('want_to_buy', 'viewed_properties'));
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


    public function SaveViewedProperty(StoreViewedProperty $request)
    {
        $viewed = new ViewedProperty();
        $viewed->marketing_team_id = $request->marketing_team_id;
        $viewed->want_to_buy_id = $request->want_to_buy_id;
        $viewed->user_id = auth()->user()->id ?? 0;
        $viewed->viewed_date = date('Y/m/d h:i:sa');
        $viewed->save();
        return json_encode(array(
            "statusCode" => 200
        ));
    }
}
