<?php

namespace App\Http\Controllers\Sale;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSaleRentAppointment;
use App\Http\Requests\UpdateSaleRentAppointment;
use App\Models\Models\SaleRentAppointment;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class SaleAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sale.sale_appointment.index');
    }

    public function AjaxSaleAppointment(Request $request)
    {

        $data = SaleRentAppointment::where('appointment_status', 'sale_appointment')->get();

        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($each) {
                $actions =
                    '<div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle btn-xs"
                        id="exampleSizingDropdown3" data-toggle="dropdown"
                        aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu" aria-labelledby="exampleSizingDropdown3"
                        role="menu">

                        <a class="dropdown-item"
                            href="' . route('sale_appointment.edit', $each->id) . '"
                            role="menuitem">
                            <i class="icon md-edit" aria-hidden="true"></i>
                            Edit
                        </a>

                        <a class="dropdown-item" href="' . route('sale_rent_appointment_delete', $each->id) . '" role="menuitem">
                            <i class="icon md-edit" aria-hidden="true"></i>
                            Delete
                        </a>
                        
                    </div>
                </div>';
                return $actions;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sale.sale_appointment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSaleRentAppointment $request)
    {
        $sale_rent = new SaleRentAppointment();
        $sale_rent->appointment_status = $request->appointment_status;
        $sale_rent->appointment_title = $request->appointment_title;
        $sale_rent->offer_name = $request->offer_name;
        $sale_rent->appointment_date = $request->appointment_date;
        $sale_rent->appointment_location = $request->appointment_location;
        $sale_rent->phone = $request->phone;
        $sale_rent->remark = $request->remark;
        $sale_rent->user_id = auth()->user()->id ?? 0;
        $sale_rent->save();
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
        $sale_rent_appointment = SaleRentAppointment::findOrFail($id);
        return view('sale.sale_appointment.edit', compact('sale_rent_appointment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSaleRentAppointment $request, $id)
    {
        $sale_rent = SaleRentAppointment::findOrFail($id);
        $sale_rent->appointment_title = $request->appointment_title;
        $sale_rent->offer_name = $request->offer_name;
        $sale_rent->appointment_date = $request->appointment_date;
        $sale_rent->appointment_location = $request->appointment_location;
        $sale_rent->phone = $request->phone;
        $sale_rent->remark = $request->remark;
        $sale_rent->user_id = auth()->user()->id ?? 0;
        $sale_rent->update();
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

    public function SaleRentAppointmentDelete($id)
    {
        $delete = SaleRentAppointment::findOrFail($id);
        $delete->delete();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }
}
