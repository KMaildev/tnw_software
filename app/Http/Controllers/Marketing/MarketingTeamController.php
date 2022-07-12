<?php

namespace App\Http\Controllers\Marketing;

use App\Exports\MarketingTeamDetailsExport;
use App\Exports\MarketingTeamExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMarketingTeam;
use App\Http\Requests\UpdateMarketingTeam;
use App\Imports\MarketingTeamImport;
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
        // Search 
        $userid = request('user_id') ?? 0;
        $price_form = request('price_form') ?? 0;
        $price_to = request('price_to') ?? 0;
        $offer_status = request('offer_status') ?? 0;
        $property_type_id = request('property_type_id') ?? 0;
        $township_id = request('township_id') ?? 0;
        $ward = request('ward') ?? 0;

        $users = User::all();
        $regions = Region::all();
        $property_types = PropertyType::all();
        $marketing_teams = MarketingTeam::where('reject_status', NULL)->get();

        // Generan Search 
        if (request('search')) {
            $search = request('search');
            $marketing_teams = MarketingTeam::where('code', 'LIKE', '%' . $search . '%')
                ->orWhere('marketing_date', 'LIKE', '%' . $search . '%')
                ->orWhere('house_style', 'LIKE', '%' . $search . '%')
                ->orWhere('price', 'LIKE', '%' . $search . '%')
                ->orWhere('road', 'LIKE', '%' . $search . '%')
                ->orWhere('no', 'LIKE', '%' . $search . '%')
                ->orWhere('name', 'LIKE', '%' . $search . '%')
                ->orWhere('phone', 'LIKE', '%' . $search . '%')
                ->orWhere('address', 'LIKE', '%' . $search . '%')
                ->orWhere('remark', 'LIKE', '%' . $search . '%')
                ->get()->where('request_status', NULL);
        }

        // Search by User 
        if (request('user_id')) {
            $user_id = request('user_id');
            $marketing_teams = MarketingTeam::where('user_id', $user_id)->get()->where('request_status', NULL);
        }

        // Search by User 
        if (request('search_township_id')) {
            $search_township_id = request('search_township_id');
            $marketing_teams = MarketingTeam::where('township_id', $search_township_id)->get()->where('request_status', NULL);
        }

        // Generan Search 
        if (request('search_type')) {
            $minPrice = request('price_form');
            $maxPrice = request('price_to');
            $offer_status = request('offer_status');
            $property_type_id = request('property_type_id');
            $township_id = request('township_id');
            $ward = request('ward');
            $bedrooms = request('bedrooms');
            $bathrooms = request('bathrooms');
            $living = request('living');

            if ($minPrice || $maxPrice) {
                $marketing_teams = MarketingTeam::whereBetween('price', [$minPrice, $maxPrice])->get()->where('request_status', NULL);
            }

            if ($offer_status) {
                $marketing_teams = MarketingTeam::where('offer_status', $offer_status)->get()->where('request_status', NULL);
            }

            if ($property_type_id != '') {
                $marketing_teams = MarketingTeam::where('property_type_id', $property_type_id)->get()->where('request_status', NULL);
            }

            if ($township_id != '') {
                $marketing_teams = MarketingTeam::where('township_id', $township_id)->get()->where('request_status', NULL);
            }

            if ($ward != '') {
                $marketing_teams = MarketingTeam::where('ward', $ward)->get()->where('request_status', NULL);
            }

            if ($bedrooms != '') {
                $marketing_teams = MarketingTeam::where('bedrooms', $bedrooms)->get()->where('request_status', NULL);
            }

            if ($bathrooms != '') {
                $marketing_teams = MarketingTeam::where('bathrooms', $bathrooms)->get()->where('request_status', NULL);
            }

            if ($living != '') {
                $marketing_teams = MarketingTeam::where('living', $living)->get()->where('request_status', NULL);
            }
        }

        return view('marketing.marketing_team.index', compact('marketing_teams', 'users', 'regions', 'property_types', 'userid'));
    }


    public function datatable_view()
    {
        $users = User::all();
        return view('marketing.marketing_team.index_datatable', compact('users'));
    }


    public function ajax_index(Request $request)
    {
        // $data = MarketingTeam::query();
        $data = MarketingTeam::whereHas('users_table', function ($q) use ($request) {
            $q->orWhere('name', 'LIKE', '%' . $request . '%');
        })->get();


        return Datatables::of($data)
            ->addIndexColumn()

            ->editColumn('marketing_name', function ($each) {
                return $each->users_table ? $each->users_table->name : '-';
            })

            ->addColumn('township_name', function ($each) {
                return $each->township_table ? $each->township_table->township : '-';
            })

            ->addColumn('property_type', function ($each) {
                return $each->property_type_table ? $each->property_type_table->property_type : '-';
            })

            ->addColumn('sqft', function ($each) {
                return $each->area_width * $each->area_height;
            })

            ->addColumn('permission_type', function ($each) {
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

            ->addColumn('orginal_or_copy', function ($each) {
                if ($each->orginal_or_copy == 'Orginal') {
                    return 'မူရင်း';
                } elseif ($each->orginal_or_copy == 'Copy') {
                    return 'မိတ္တူ';
                } else {
                    return '';
                }
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

                        <a class="dropdown-item" href="#" role="menuitem">
                            <i class="icon md-edit" aria-hidden="true"></i>
                            Reject
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
            ->rawColumns(['action', 'photo_status'])
            ->make(true);
    }



    public function ssd()
    {
        $marketing_teams = MarketingTeam::where('reject_status', NULL)->get();
        return json_encode($marketing_teams);
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

        // $follow_up_status = $request->follow_up_status;
        // if ($follow_up_status) {
        //     $follow_up = new FollowUp();

        //     $follow_up->date_time = $request->date_time;

        //     $date_time = $request->date_time;
        //     $date = explode(" ", $date_time);
        //     $follow_up->follow_up_date = $date[0];

        //     $follow_up->follow_up_type = $request->follow_up_type;
        //     $follow_up->follow_up_remark = $request->follow_up_remark;
        //     $follow_up->additional_note = $request->additional_note;
        //     $follow_up->user_id = $user_id ?? 0;
        //     $follow_up->marketing_team_id = $marketing_team_id;
        //     $follow_up->save();
        // }


        // $appointment_status = $request->appointment_status;
        // if ($appointment_status) {
        //     $appointment = new Appointment();
        //     $appointment->appointment_date_time = $request->appointment_date_time;

        //     $date_time = $request->appointment_date_time;
        //     $date = explode(" ", $date_time);
        //     $appointment->appointment_date = $date[0];

        //     $appointment->appointment_person = $request->appointment_person;
        //     $appointment->appointment_location = $request->appointment_location;
        //     $appointment->appointment_remark = $request->appointment_remark;
        //     $appointment->user_id = $user_id ?? 0;
        //     $appointment->marketing_team_id = $marketing_team_id;
        //     $appointment->save();
        // }


        // if ($request->hasFile('files')) {
        //     foreach ($request->file('files') as $key => $file) {
        //         $path = $file->store('public/marketing_files');
        //         $original_name = $file->getClientOriginalName();

        //         $insert[$key]['photo'] = $path;
        //         $insert[$key]['original_name'] = $original_name;

        //         $insert[$key]['marketing_team_id'] = $marketing_team_id;
        //         $insert[$key]['user_id'] = auth()->user()->id;
        //         $insert[$key]['created_at'] =  date('Y-m-d H:i:s');
        //         $insert[$key]['updated_at'] =  date('Y-m-d H:i:s');
        //     }
        //     MarketingFile::insert($insert);
        // }

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
        return view('marketing.marketing_team.show', compact('marketing_edit', 'marketing_files', 'visitors'));
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
        $marketing->photo_status = 'no' ?? '';
        $marketing->reject_status = NULL;
        $marketing->user_id = $user_id ?? 0;
        $marketing->save();
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
        // $marketing_files = MarketingFile::where(['marketing_team_id' => $id])->get();
        return Excel::download(new MarketingTeamDetailsExport($marketing_edit), 'property_details_' . date("Y-m-d H:i:s") . '.xlsx');
    }
}
