<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Models\InterestRate;
use App\Models\MarketingTeam;
use App\Models\PropertyType;
use App\Models\Region;
use App\Models\Reject;
use App\User;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class RejectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('marketing.reject.index', compact('users'));
    }


    public function ajax_index(Request $request)
    {
        $start = $request->get('from');
        $to = $request->get('to');
        if ($start && $to) {
            $data = MarketingTeam::where('reject_status', 'reject')->whereBetween('price', [$start, $to])
                ->get();
        } else {
            $data = MarketingTeam::where('reject_status', 'reject')->whereHas('users_table', function ($q) use ($request) {
                $q->orWhere('name', 'LIKE', '%' . $request . '%');
            })->get();
        }
        return Datatables::of($data)
            ->addIndexColumn()

            ->editColumn('marketing_name', function ($each) {
                return $each->users_table ? $each->users_table->name : '-';
            })

            ->editColumn('offer_status', function ($each) {
                $str = str_replace('_', ' ', $each->offer_status);
                return ucwords($str);
            })

            ->editColumn('township_name', function ($each) {
                return $each->township_table ? $each->township_table->township : '-';
            })

            ->editColumn('property_type', function ($each) {
                return $each->property_type_table ? $each->property_type_table->property_type : '-';
            })

            ->editColumn('sqft', function ($each) {
                return $each->area_width . '*' . $each->area_height . ' = ' . $each->area_width * $each->area_height;
            })

            ->editColumn('permission_type', function ($each) {
                if ($each->permission_type == 'grant') {
                    return 'ဂရံ';
                } elseif ($each->permission_type == 'permit') {
                    return 'Permit';
                } elseif ($each->permission_type == 'ancestral_land') {
                    return 'ဘိုးဘွားပိုင်မြေ';
                } else {
                    return '';
                }
            })

            ->editColumn('orginal_or_copy', function ($each) {
                if ($each->orginal_or_copy == 'Orginal') {
                    return 'မူရင်း';
                } elseif ($each->orginal_or_copy == 'Copy') {
                    return 'မိတ္တူ';
                } else {
                    return '';
                }
            })

            ->editColumn('phone', function ($each) {
                $id = $each->id;
                $phone =  $each->phone;
                return view("marketing.marketing_team.load.phone", compact("phone", "id"));
            })

            ->addColumn('photo_status', function ($each) {

                $photo_status = ($each->photo_status == 'no') ? ('No') : ('Yes');
                $bg_status = ($each->photo_status == 'no') ? ('bg-danger') : ('bg-success');

                $html =
                    '<div class="d-flex flex-column w-100">
                        <div class="d-flex justify-content-between">
                            <span>
                            ' . $photo_status . '
                            </span>
                        </div>
                        <div class="progress" style="height:3px; margin-bottom: 0">
                            <div class="progress-bar ' . $bg_status . '"
                                style="width: 100%" role="progressbar">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="' . route('marketing_file_create.create', ['id' => $each->id]) . '"
                                style="font-size: 12px;">
                                Upload
                            </a>
                            <a href="' . route('marketing_file_create.create', ['id' => $each->id]) . '" style="font-size: 12px;">
                                View
                            </a>
                        </div>
                    </div>';
                return $html;
            })

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
                            href="' . route('marketing_team.show', $each->id) . '"
                            role="menuitem">
                            <i class="icon md-eye" aria-hidden="true"></i>
                            View Detail
                        </a>

                        <a class="dropdown-item"
                            href="' . route('marketing_team.edit', $each->id) . '"
                            role="menuitem">
                            <i class="icon md-edit" aria-hidden="true"></i>
                            Edit
                        </a>

                        <a class="dropdown-item del_confirm"
                            href="#"
                            role="menuitem" 
                            data-id="' . $each->id . '">
                            <i class="icon md-delete" aria-hidden="true"></i>
                            Delete
                        </a>

                    </div>
                </div>';
                return $actions;
            })

            ->rawColumns(['action', 'photo_status', 'phone'])
            ->make(true);
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
        $property_types = PropertyType::all();
        $regions = Region::all();
        $marketing_edit = MarketingTeam::findOrFail($id);
        return view('marketing.reject.edit', compact('marketing_edit', 'property_types', 'regions'));
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
