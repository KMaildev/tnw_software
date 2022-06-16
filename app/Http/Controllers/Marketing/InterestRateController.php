<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInterestRate;
use App\Http\Requests\UpdateInterestRate;
use App\Models\InterestRate;
use Illuminate\Http\Request;

class InterestRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interest_rates = InterestRate::all();
        return view('marketing.interest_rate.index', compact('interest_rates'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marketing.interest_rate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInterestRate $request)
    {
        $data = new InterestRate();
        $data->title = $request->title;
        $data->save();
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
        $interest_rate = InterestRate::findOrFail($id);
        return view('marketing.interest_rate.edit', compact('interest_rate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInterestRate $request, $id)
    {
        $data = InterestRate::findOrFail($id);
        $data->title = $request->title;
        $data->update();
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
        $permission = InterestRate::findOrFail($id);
        $permission->delete();
        return redirect()->back()->with('success', 'Permission is successfully deleted.');
    }
}
