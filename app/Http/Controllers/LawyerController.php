<?php

namespace App\Http\Controllers;

use App\Models\Models\Lawyer;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lawyers = Lawyer::all();
        return view('property_management.lawyer.index', compact('lawyers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('property_management.lawyer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lawyer = new Lawyer();
        $lawyer->name = $request->name;
        $lawyer->email = $request->email;
        $lawyer->phone = $request->phone;
        $lawyer->degree = $request->degree;
        $lawyer->license_no = $request->license_no;
        $lawyer->address = $request->address;
        $lawyer->remark = $request->remark;
        $lawyer->save();
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
        $lawyer = Lawyer::findOrFail($id);
        $lawyer->name = $request->name;
        $lawyer->email = $request->email;
        $lawyer->phone = $request->phone;
        $lawyer->degree = $request->degree;
        $lawyer->license_no = $request->license_no;
        $lawyer->address = $request->address;
        $lawyer->remark = $request->remark;
        $lawyer->update();
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
