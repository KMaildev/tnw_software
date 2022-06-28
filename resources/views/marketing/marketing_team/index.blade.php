@extends('layouts.menu.marketing')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Makerting Team</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('marketing_dahsboard.index') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Makerting Team</li>
            </ol>
            <div class="page-header-actions">
                <a class="btn btn-sm btn-primary" href="{{ route('marketing_team.create') }}">
                    <i class="icon md-plus" aria-hidden="true"></i>
                    <span class="hidden-sm-down">
                        Create
                    </span>
                </a>
            </div>
        </div>

        <div class="page-content container-fluid">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12">

                    <div class="panel">
                        <header class="panel-heading">
                            <h3 class="panel-title">
                                Makerting Team
                            </h3>
                        </header>
                        <div class="panel-body table-responsive text-nowrap" style="overflow-x:auto;">
                            <a href="{{ route('marketing_team_export') }}"
                                class="btn btn-success waves-effect waves-classic">
                                <i class="icon md-file" aria-hidden="true"></i>
                                Export to Excel
                            </a>

                            <br><br>
                            <table class="table table-bordered table-layout">
                                <thead class="tbbg">
                                    <tr>
                                        <td rowspan="2" style="width: 1%;">
                                            #
                                        </td>

                                        <td rowspan="2" style="width: 5%; text-align: center;">
                                            Marketing Name
                                        </td>

                                        <td rowspan="2" style="width: 10%; text-align: center;">
                                            Type
                                        </td>

                                        <td rowspan="2" style="width: 10%; text-align: center;">
                                            Date & Time
                                        </td>

                                        <td rowspan="2" style="width: 10%; text-align: center;">
                                            Code
                                        </td>

                                        <td rowspan="2" style="width: 2%; text-align: center;">
                                            No/အိမ်အမှတ်
                                        </td>

                                        <td rowspan="2" style="width: 10%; text-align: center;">
                                            Road/လမ်း
                                        </td>

                                        <td rowspan="2" style="width: 10%; text-align: center;">
                                            Ward/ရပ်ကွက်
                                        </td>

                                        <td rowspan="2" style="width: 10%; text-align: center;">
                                            Tsp/မြို့နယ်
                                        </td>

                                        <td rowspan="2" style="width: 10%; text-align: center;">
                                            Property Type
                                        </td>

                                        <td colspan="2"
                                            style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                                            Property Style
                                        </td>

                                        <td rowspan="2" style="width: 10%; text-align: center;">
                                            Price (Lakhs)
                                        </td>

                                        <td colspan="2" style="width: 5%; text-align: center; background-color: green;">
                                            Wide
                                        </td>

                                        <td colspan="2"
                                            style="width: 10%; text-align: center; background-color: #c01faa;">
                                            Permission
                                        </td>

                                        <td rowspan="2" style="width: 10%; text-align: center;">
                                            Owner/Agent
                                        </td>

                                        <td rowspan="2" style="width: 10%; text-align: center;">
                                            Name
                                        </td>

                                        <td rowspan="2" style="width: 10%; text-align: center;">
                                            Phone
                                        </td>

                                        <td rowspan="2" style="width: 10%; text-align: center;">
                                            Photo
                                        </td>

                                        <td rowspan="2" style="width: 10%; text-align: center;">
                                            Actions
                                        </td>

                                    </tr>

                                    <tr>
                                        <td style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                                            Floor
                                        </td>
                                        <td style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                                            House Style
                                        </td>


                                        <td style="color: white; background-color: green; text-align: center; widht: 10%">
                                            Sqft
                                        </td>
                                        <td style="color: white; background-color: green; text-align: center; widht: 10%">
                                            Acre
                                        </td>

                                        <td style="color: white; background-color: #c01faa; text-align: center; widht: 10%">
                                            Premission
                                        </td>
                                        <td style="color: white; background-color: #c01faa; text-align: center; widht: 10%">
                                            မူရင်း/မိတ္တူ
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($marketing_teams as $key => $marketing_team)
                                        <tr>
                                            <td>
                                                {{ $key + 1 }}
                                            </td>

                                            <td>
                                                {{ $marketing_team->users_table->name ?? '' }}
                                            </td>

                                            <td>
                                                {{ Str::upper(str_replace('_', ' ', $marketing_team->offer_status ?? '')) }}
                                            </td>

                                            <td>
                                                {{ $marketing_team->marketing_date ?? '' }}
                                            </td>

                                            <td>
                                                {{ $marketing_team->code ?? '' }}
                                            </td>

                                            <td>
                                                {{ $marketing_team->no ?? '' }}
                                            </td>

                                            <td>
                                                {{ $marketing_team->road ?? '' }}
                                            </td>

                                            <td>
                                                {{ $marketing_team->ward ?? '' }}
                                            </td>

                                            <td>
                                                {{ $marketing_team->township_table->township ?? '' }}
                                            </td>

                                            <td>
                                                {{ $marketing_team->property_type_table->property_type ?? '' }}
                                            </td>

                                            <td>
                                                {{ $marketing_team->floor ?? '' }}
                                            </td>

                                            <td>
                                                {{ $marketing_team->house_style ?? '' }}
                                            </td>

                                            <td>
                                                {{ $marketing_team->price ?? 0 }}
                                            </td>

                                            <td>
                                                {{ $marketing_team->area_width * $marketing_team->area_height }}
                                            </td>

                                            <td>
                                                {{ $marketing_team->area ?? '' }}
                                            </td>

                                            <td>
                                                @if ($marketing_team->permission_type == 'grant')
                                                    ဂရံ
                                                @elseif ($marketing_team->permission_type == 'permit')
                                                    Permit
                                                @elseif ($marketing_team->permission_type == 'ancestral_land')
                                                    ဘိုးဘွားပိုင်မြေ
                                                @endif

                                                @if ($marketing_team->grant_type)
                                                    ({{ $marketing_team->grant_type ?? '' }})
                                                @endif
                                            </td>

                                            <td>
                                                @if ($marketing_team->orginal_or_copy == 'Orginal')
                                                    မူရင်း
                                                @elseif ($marketing_team->orginal_or_copy == 'Copy')
                                                    မိတ္တူ
                                                @endif
                                            </td>

                                            <td>
                                                {{ $marketing_team->owner_agent ?? '' }}
                                            </td>

                                            <td>
                                                {{ $marketing_team->name ?? '' }}
                                            </td>

                                            <td>
                                                {{ $marketing_team->phone ?? '' }}
                                            </td>

                                            <td>
                                                <div class="d-flex flex-column w-100">
                                                    <div class="d-flex justify-content-between">
                                                        <span>
                                                            @if ($marketing_team->photo_status == 'no')
                                                                No
                                                            @else
                                                                Yes
                                                            @endif
                                                        </span>
                                                    </div>
                                                    <div class="progress" style="height:3px; margin-bottom: 0">
                                                        <div class="progress-bar {{ $marketing_team->photo_status == 'no' ? 'bg-danger' : 'bg-success' }}"
                                                            style="width: 100%" role="progressbar">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <a href="{{ route('marketing_file_create.create', ['id' => $marketing_team->id]) }}"
                                                            style="font-size: 12px;">
                                                            Upload
                                                        </a>
                                                        <a href="#" onclick="alert('in progress')"
                                                            style="font-size: 12px;">
                                                            View
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>

                                            <td style="text-align: center;">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info dropdown-toggle btn-xs"
                                                        id="exampleSizingDropdown3" data-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="exampleSizingDropdown3"
                                                        role="menu">

                                                        <a class="dropdown-item" href="#" role="menuitem"
                                                            onclick="alert('in progress')">
                                                            <i class="icon md-edit" aria-hidden="true"></i>
                                                            Edit
                                                        </a>

                                                        <a class="dropdown-item" href="#" role="menuitem"
                                                            onclick="alert('in progress')">
                                                            <i class="icon md-edit" aria-hidden="true"></i>
                                                            View Detail
                                                        </a>

                                                        <a class="dropdown-item" href="#" role="menuitem"
                                                            onclick="alert('in progress')">
                                                            <i class="icon md-edit" aria-hidden="true"></i>
                                                            Reject
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
