<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWantToBuy;
use App\Models\Models\ViewedProperty;
use App\Models\Models\WantToBuy;
use App\Models\PropertyType;
use App\Models\Region;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class WantToBuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('marketing.want_to_buy.index');
    }

    public function AjaxWantToBuy(Request $request)
    {
        $data =  WantToBuy::all();

        return Datatables::of($data)
            ->addIndexColumn()

            ->editColumn('marketing_name', function ($each) {
                return $each->users_table ? $each->users_table->name : '-';
            })

            ->editColumn('property_type', function ($each) {
                return $each->property_type_table ? $each->property_type_table->property_type : '-';
            })

            ->editColumn('sqft', function ($each) {
                if ($each->area_width == NULL || $each->area_width == '') {
                    $area_width = 0;
                } else {
                    $area_width = $each->area_width ?? 0;
                }

                if ($each->area_height == NULL || $each->area_height == '') {
                    $area_height = 0;
                } else {
                    $area_height = $each->area_height ?? 0;
                }

                return $area_width . '*' . $area_height . ' = ' . $area_width * $area_height;
            })

            ->editColumn('township_name', function ($each) {
                return $each->township_table ? $each->township_table->township : '-';
            })

            ->addColumn('viewed_status', function ($each) {
                $html =
                    '<center>
                        <div class="d-flex flex-column w-100">
                            <div class="d-flex justify-content-between">
                                <span>
                                    Viewed Property 
                                </span>
                            </div>
                            <div class="progress" style="height:3px; margin-bottom: 0">
                                <div class="progress-bar"
                                    style="width: 100%" role="progressbar">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="' . route('create_viewed_property', ['id' => $each->id]) . '"
                                    style="font-size: 12px;">
                                    Add
                                </a>
                                <a href="' . route('want_to_buy.show', $each->id) . '" style="font-size: 12px;">
                                    Details
                                </a>
                            </div>
                        </div>
                    </center>
                    ';
                return $html;
            })

            ->addColumn('action', function ($each) {
                $actions =
                    '<center> 
                        <div class="btn-group">
                        <button type="button" class="btn btn-info dropdown-toggle btn-xs"
                            id="exampleSizingDropdown3" data-toggle="dropdown"
                            aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu" aria-labelledby="exampleSizingDropdown3"
                            role="menu">

                            <a class="dropdown-item"
                                href="' . route('want_to_buy.edit', $each->id) . '"
                                role="menuitem">
                                <i class="icon md-edit" aria-hidden="true"></i>
                                Edit Data
                            </a>

                            <a class="dropdown-item"
                                href="' . route('want_to_buy.show', $each->id) . '"
                                role="menuitem">
                                <i class="icon md-edit" aria-hidden="true"></i>
                                View Detail
                            </a>
                            
                        </div>
                    </div>
                </center>';
                return $actions;
            })
            ->rawColumns(['action', 'viewed_status', 'property_type', 'sqft', 'township_name', 'marketing_name'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $property_types = PropertyType::all();
        $regions = Region::all();
        return view('marketing.want_to_buy.create', compact('property_types', 'regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWantToBuy $request)
    {
        $want_to_buy = new WantToBuy();
        $want_to_buy->customer_name = $request->customer_name;
        $want_to_buy->phone_number = $request->phone_number;
        $want_to_buy->email = $request->email;
        $want_to_buy->address = $request->address;
        $want_to_buy->township_id = $request->township_id;
        $want_to_buy->property_type_id = $request->property_type_id;
        $want_to_buy->price_from = $request->price_from;
        $want_to_buy->price_to = $request->price_to;
        $want_to_buy->area_width = $request->area_width;
        $want_to_buy->area_height = $request->area_height;
        $want_to_buy->area = $request->area;
        $want_to_buy->area_type = $request->area_type;
        $want_to_buy->remark = $request->remark;
        $want_to_buy->user_id = auth()->user()->id ?? 0;
        $want_to_buy->create_date = date('Y/m/d h:i:sa');
        $want_to_buy->save();
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
        $want_to_buy = WantToBuy::findOrFail($id);
        $viewed_properties = ViewedProperty::where(['want_to_buy_id' => $id])->get();
        return view('marketing.want_to_buy.show', compact('want_to_buy', 'viewed_properties'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property_types = PropertyType::all();
        $regions = Region::all();
        $want_to_buy = WantToBuy::findOrFail($id);
        return view('marketing.want_to_buy.edit', compact('property_types', 'regions', 'want_to_buy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreWantToBuy $request, $id)
    {
        $want_to_buy = WantToBuy::findOrFail($id);
        $want_to_buy->customer_name = $request->customer_name;
        $want_to_buy->phone_number = $request->phone_number;
        $want_to_buy->email = $request->email;
        $want_to_buy->address = $request->address;
        $want_to_buy->township_id = $request->township_id;
        $want_to_buy->property_type_id = $request->property_type_id;
        $want_to_buy->price_from = $request->price_from;
        $want_to_buy->price_to = $request->price_to;
        $want_to_buy->area_width = $request->area_width;
        $want_to_buy->area_height = $request->area_height;
        $want_to_buy->area = $request->area;
        $want_to_buy->area_type = $request->area_type;
        $want_to_buy->remark = $request->remark;
        $want_to_buy->user_id = auth()->user()->id ?? 0;
        $want_to_buy->update();
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
