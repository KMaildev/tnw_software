<?php

namespace App\Http\Controllers\Sale;

use App\Http\Controllers\Controller;
use App\Models\Models\SaleRentAppointment;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class RentAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sale.rent_appointment.index');
    }

    public function AjaxRentAppointment(Request $request)
    {

        $data = SaleRentAppointment::where('appointment_status', 'rent_appointment')->get();

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
        return view('sale.rent_appointment.create');
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
}
