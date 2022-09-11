<?php

namespace App\Http\Controllers\Marketing;

use App\Exports\MarketingTeamDetailsExport;
use App\Exports\MarketingTeamExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMarketingTeam;
use App\Http\Requests\UpdateMarketingTeam;
use App\Imports\MarketingTeamImport;
use App\Models\Appointment;
use App\Models\FollowUp;
use App\Models\MarketingTeam;
use App\Models\Models\MarketingFile;
use App\Models\Models\MarketingTeamCount;
use App\Models\Models\Visitor;
use App\Models\PropertyType;
use App\Models\Region;
use App\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\Datatables\Datatables;

class MarketingTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('marketing.marketing_team.index', compact('users'));
    }

    public function ajax_index(Request $request)
    {
        $start = $request->get('from');
        $to = $request->get('to');
        if ($start && $to) {
            $data = MarketingTeam::where('reject_status', NULL)->whereBetween('price', [$start, $to])
                ->get();
        } else {
            $data = MarketingTeam::where('reject_status', NULL)->whereHas('users_table', function ($q) use ($request) {
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
                if($each->area_width == NULL || $each->area_width == ''){
                    $area_width = 0;
                }else{
                    $area_width = $each->area_width ?? 0;
                }
                
                if($each->area_height == NULL || $each->area_height == ''){
                    $area_height = 0;
                }else{
                    $area_height = $each->area_height ?? 0;
                }

                return $area_width . '*' . $area_height . ' = ' . $area_width * $area_height;
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

            ->addColumn('phone', function ($each) {
                $id =  $each->id;
                $html = '';
                $html .= '
                    <button type="button" class="btn btn-primary btn-xs" id="showPhoneModel" data-id="' . $id . '">
                        <i class="fa fa-phone"></i>
                        Call Now
                    </button>
                ';
                return $html;
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

                        <a class="dropdown-item" href="' . route('reject.edit', $each->id) . '" role="menuitem">
                            <i class="icon md-edit" aria-hidden="true"></i>
                            Reject
                        </a>

                        <a class="dropdown-item"
                            href="' . route('marketing_team.edit', $each->id) . '"
                            role="menuitem">
                            <i class="icon md-edit" aria-hidden="true"></i>
                            Edit
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
        $property_types = PropertyType::all();
        $regions = Region::all();
        return view('marketing.marketing_team.create', compact('property_types', 'regions'));
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
        // Generate Code
        $marketing_team_data_count = MarketingTeamCount::all();
        $code_count = count($marketing_team_data_count);
        $increment = 'TNW-' . sprintf('%06d', $code_count + 1);

        $marketing_team_data_count = new MarketingTeamCount();
        $marketing_team_data_count->offer_status = $request->offer_status ?? '';
        $marketing_team_data_count->code = $increment ?? '';
        $marketing_team_data_count->marketing_date = $request->marketing_date ?? '';
        $marketing_team_data_count->save();

        $marketing = new MarketingTeam();
        $marketing->offer_status = $request->offer_status ?? '';
        $marketing->code = $increment ?? '';
        $marketing->marketing_date = $request->marketing_date ?? '';
        $marketing->no = $request->no ?? '';
        $marketing->road = $request->road ?? '';
        $marketing->township_id = $request->township_id ?? '';
        $marketing->ward = $request->ward ?? '';
        $marketing->property_type_id = $request->property_type_id ?? '';
        $marketing->floor = $request->floor ?? '';
        $marketing->house_style = $request->house_style ?? '';
        $marketing->price = $request->price ?? '';
        $marketing->rent_offer_contract_status = $request->rent_offer_contract_status ?? '';
        $marketing->deposit_amount = $request->deposit_amount ?? '';
        $marketing->area_width = $request->area_width ?? '';
        $marketing->area_height = $request->area_height ?? '';
        $marketing->area = $request->area ?? '';
        $marketing->area_type = $request->area_type ?? '';
        $marketing->bcc_status = $request->bcc_status ?? '';
        $marketing->owner_status = $request->owner_status ?? '';
        $marketing->lift_status = $request->lift_status ?? '';
        $marketing->property_status = $request->property_status ?? '';
        $marketing->extra_charge = $request->extra_charge ?? '';
        $marketing->rooms = $request->rooms ?? '';
        $marketing->shrine = $request->shrine ?? '';
        $marketing->bathrooms = $request->bathrooms ?? '';
        $marketing->dining = $request->dining ?? '';
        $marketing->living = $request->living ?? '';
        $marketing->bedrooms = $request->bedrooms ?? '';
        $marketing->master_bedrooms = $request->master_bedrooms ?? '';
        $marketing->other_rooms = $request->other_rooms ?? '';
        $marketing->permission_type = $request->permission_type ?? '';
        $marketing->grant_type = $request->grant_type ?? '';
        $marketing->orginal_or_copy = $request->orginal_or_copy ?? '';
        $marketing->owner_agent = $request->owner_agent ?? '';
        $marketing->name = $request->name ?? '';
        $marketing->phone = $request->phone ?? '';
        $marketing->email = $request->email ?? '';
        $marketing->address = $request->address ?? '';
        $marketing->remark = $request->remark ?? '';
        $marketing->photo_status = 'no' ?? '';
        $marketing->reject_status = NULL;
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
        $marketing_edit = MarketingTeam::findOrFail($id);
        $marketing_files = MarketingFile::where(['marketing_team_id' => $id])->get();
        $visitors = Visitor::where(['marketing_team_id' => $id])->get();
        $follow_ups = FollowUp::where(['marketing_team_id' => $id])->get();
        $appointments = Appointment::where(['marketing_team_id' => $id])->get();
        return view('marketing.marketing_team.show', compact('marketing_edit', 'marketing_files', 'visitors', 'follow_ups', 'appointments'));
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
        return view('marketing.marketing_team.edit', compact('marketing_edit', 'property_types', 'regions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMarketingTeam $request, $id)
    {
        $user_id = auth()->user()->id;
        $marketing = MarketingTeam::findOrFail($id);
        $marketing->offer_status = $request->offer_status ?? '';
        $marketing->marketing_date = $request->marketing_date ?? '';
        $marketing->no = $request->no ?? '';
        $marketing->road = $request->road ?? '';
        $marketing->township_id = $request->township_id ?? '';
        $marketing->ward = $request->ward ?? '';
        $marketing->property_type_id = $request->property_type_id ?? '';
        $marketing->floor = $request->floor ?? '';
        $marketing->house_style = $request->house_style ?? '';
        $marketing->price = $request->price ?? '';
        $marketing->rent_offer_contract_status = $request->rent_offer_contract_status ?? '';
        $marketing->deposit_amount = $request->deposit_amount ?? '';
        $marketing->area_width = $request->area_width ?? '';
        $marketing->area_height = $request->area_height ?? '';
        $marketing->area = $request->area ?? '';
        $marketing->area_type = $request->area_type ?? '';
        $marketing->bcc_status = $request->bcc_status ?? '';
        $marketing->owner_status = $request->owner_status ?? '';
        $marketing->lift_status = $request->lift_status ?? '';
        $marketing->property_status = $request->property_status ?? '';
        $marketing->extra_charge = $request->extra_charge ?? '';
        $marketing->rooms = $request->rooms ?? '';
        $marketing->shrine = $request->shrine ?? '';
        $marketing->bathrooms = $request->bathrooms ?? '';
        $marketing->dining = $request->dining ?? '';
        $marketing->living = $request->living ?? '';
        $marketing->bedrooms = $request->bedrooms ?? '';
        $marketing->master_bedrooms = $request->master_bedrooms ?? '';
        $marketing->other_rooms = $request->other_rooms ?? '';
        $marketing->permission_type = $request->permission_type ?? '';
        $marketing->grant_type = $request->grant_type ?? '';
        $marketing->orginal_or_copy = $request->orginal_or_copy ?? '';
        $marketing->owner_agent = $request->owner_agent ?? '';
        $marketing->name = $request->name ?? '';
        $marketing->phone = $request->phone ?? '';
        $marketing->email = $request->email ?? '';
        $marketing->address = $request->address ?? '';
        $marketing->remark = $request->remark ?? '';
        $marketing->reject_status = NULL;
        $marketing->user_id = $user_id ?? 0;
        $marketing->update();
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
        $marketing = MarketingTeam::findOrFail($id);
        $marketing->delete();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }


    public function already_live_filter_search(Request $request)
    {
        $No = $request->No;
        $WardNo = $request->WardNo;
        $Road = $request->Road;

        if ($No) {
            $marketing_data = MarketingTeam::where(['no' => $No])->get();
        }

        if ($WardNo) {
            $marketing_data = MarketingTeam::where(['ward' => $WardNo])->get();
        }

        if ($Road) {
            $marketing_data = MarketingTeam::where(['road' => $Road])->get();
        }

        if ($No && $WardNo && $Road) {
            $marketing_data = MarketingTeam::where([
                'no' => $No,
                'ward' => $WardNo,
                'road' => $Road,
            ])->get();
        }

        return json_encode($marketing_data);
    }


    /**
     * @return \Illuminate\Support\Collection
     */
    public function marketing_team_import()
    {
        Excel::import(new MarketingTeamImport, request()->file('file'));
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }


    /**
     * @return \Illuminate\Support\Collection
     */
    public function marketing_team_export()
    {
        $marketing_teams = MarketingTeam::where('reject_status', NULL)->get();
        return Excel::download(new MarketingTeamExport($marketing_teams), 'marketing_team_' . date("Y-m-d H:i:s") . '.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function marketing_team_details_export($id)
    {
        $marketing_edit = MarketingTeam::findOrFail($id);
        return Excel::download(new MarketingTeamDetailsExport($marketing_edit), 'property_details_' . date("Y-m-d H:i:s") . '.xlsx');
    }


    public function get_phone_number($id)
    {
        $marketing = MarketingTeam::findOrFail($id);

        $propertyPhoneNumber = explode(',', $marketing->phone);
        $propertyPhoneNumberTotal = count($propertyPhoneNumber);

        $html = '';
        for ($i = 0; $i < $propertyPhoneNumberTotal; $i++) {
            $ph = $propertyPhoneNumber[$i];
            $html .= '<a href="tel:' . $ph . '">' . $ph . '</a>';
            $html .= "<br>";
        }

        return response()->json(['html' => $html]);
    }
}
