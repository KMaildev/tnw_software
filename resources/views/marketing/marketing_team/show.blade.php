@extends('layouts.menu.marketing')
@section('content')
    <div class="page page-aside-fixed page-aside-left">
        <div class="nav-tabs-horizontal" data-plugin="tabs">
            <div class="page-aside">
                <div class="page-aside-switch">
                    <i class="icon md-chevron-left" aria-hidden="true"></i>
                    <i class="icon md-chevron-right" aria-hidden="true"></i>
                </div>
                <div class="page-aside-inner page-aside-scroll">
                    <div data-role="container">
                        <div data-role="content">
                            <section class="page-aside-section">
                                <h5 class="page-aside-title">Main</h5>
                                <div class="list-group" role="tablist">

                                    <a class="list-group-item active" data-toggle="tab" href="#Property"
                                        aria-controls="Property" role="tab">
                                        <i class="icon md-view-dashboard" aria-hidden="true"></i>
                                        Property
                                    </a>

                                    <a class="list-group-item" data-toggle="tab" href="#PhotoTab" aria-controls="PhotoTab"
                                        role="tab">
                                        <i class="icon md-image" aria-hidden="true"></i>
                                        Photo
                                    </a>

                                    <a class="list-group-item" data-toggle="tab" href="#GoogleMapTab"
                                        aria-controls="GoogleMapTab" role="tab">
                                        <i class="icon md-map" aria-hidden="true"></i>
                                        Google Map
                                    </a>

                                    <a class="list-group-item" data-toggle="tab" href="#OwnerAgentInfo"
                                        aria-controls="OwnerAgentInfo" role="tab">
                                        <i class="icon md-view-dashboard" aria-hidden="true"></i>
                                        Owner / Agent Info
                                    </a>

                                    <a class="list-group-item" data-toggle="tab" href="#Remark" aria-controls="Remark"
                                        role="tab">
                                        <i class="icon md-view-dashboard" aria-hidden="true"></i>
                                        Remark
                                    </a>

                                    <a class="list-group-item" data-toggle="tab" href="#Marketing" aria-controls="Marketing"
                                        role="tab">
                                        <i class="icon md-view-dashboard" aria-hidden="true"></i>
                                        Marketing
                                    </a>

                                    <a class="list-group-item" data-toggle="tab" href="#CallHistory"
                                        aria-controls="CallHistory" role="tab">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        Follow Up(Call History)
                                    </a>

                                    <a class="list-group-item" data-toggle="tab" href="#Appointments"
                                        aria-controls="Appointments" role="tab">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        Appointments
                                    </a>


                                    @if ($marketing_edit->reject_status == 'reject')
                                        <a class="list-group-item" data-toggle="tab" href="#Reject" aria-controls="Reject"
                                            role="tab">
                                            <i class="icon md-view-dashboard" aria-hidden="true"></i>
                                            Reject Status
                                        </a>
                                    @endif

                                </div>
                            </section>


                            <section class="page-aside-section">
                                <h5 class="page-aside-title">
                                    Actions
                                </h5>
                                <div class="list-group" role="tablist">

                                    <a class="list-group-item" data-toggle="tab" href="#Visitor" aria-controls="Visitor"
                                        role="tab">
                                        <i class="icon md-view-dashboard" aria-hidden="true"></i>
                                        Visitor History
                                    </a>

                                    <a class="list-group-item" data-toggle="tab" href="#VisitorReport"
                                        aria-controls="VisitorReport" role="tab">
                                        <i class="icon md-view-dashboard" aria-hidden="true"></i>
                                        Visitor Report
                                    </a>

                                    <a class="list-group-item" data-toggle="tab" href="#FollowUpHistory"
                                        aria-controls="FollowUpHistory" role="tab">
                                        <i class="icon md-view-dashboard" aria-hidden="true"></i>
                                        Follow Up History
                                    </a>

                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-main">
                <div class="page-header">
                    @include('layouts.includes.other_alert')
                    <h1 class="page-title">
                        @if ($marketing_edit->offer_status == 'sale_offer')
                            Sale Offer
                        @elseif ($marketing_edit->offer_status == 'sale_offer')
                            Rent Offer
                        @endif
                    </h1>
                </div>
                <div class="page-content">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="tab-content">

                                {{-- Property --}}
                                <div class="tab-pane active" id="Property" role="tabpanel">
                                    <div class="col-md-12 col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="card-title">
                                                    Property Information
                                                </h4>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('marketing_team.edit', $marketing_edit->id) }}"
                                                    class="btn btn-success float-right mr-3">
                                                    <i class="fa fa-edit"></i>
                                                    Edit
                                                </a>

                                                <div class="btn-group float-right">
                                                    <button type="button" class="btn btn-success mr-3 dropdown-toggle"
                                                        id="exampleSizingDropdown3" data-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Export
                                                    </button>

                                                    <div class="dropdown-menu" aria-labelledby="exampleSizingDropdown3"
                                                        role="menu">

                                                        <a class="dropdown-item"
                                                            href="{{ route('marketing_team_details_export', $marketing_edit->id) }}"
                                                            role="menuitem">
                                                            <i class="icon md-file" aria-hidden="true"></i>
                                                            Export to Excel
                                                        </a>

                                                        <a class="dropdown-item" href="#" role="menuitem"
                                                            onclick="alert('in progress')">
                                                            <i class="icon md-file" aria-hidden="true"></i>
                                                            Export to PDF
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    @include('components.property_information')
                                </div>

                                {{-- Photo --}}
                                <div class="tab-pane" id="PhotoTab" role="tabpanel">
                                    <div class="card">
                                        <div class="col-md-12 col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="card-title">
                                                        Property Photo
                                                    </h4>
                                                </div>

                                                <div class="col-md-6">
                                                    <a href="{{ route('marketing_file_create.create', ['id' => $marketing_edit->id]) }}"
                                                        style="font-size: 12px;" class="btn btn-success float-right">
                                                        <i class="fa fa-upload"></i>
                                                        Upload Photo
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="card-block p-0">
                                            <div class="col-md-12 col-md-12">
                                                <div class="row">
                                                    @foreach ($marketing_files as $marketing_file)
                                                        <div class="col-md-3">
                                                            <div class="card card-shadow">
                                                                <figure class="card-img-top overlay-hover overlay">
                                                                    <img class="overlay-figure overlay-scale"
                                                                        src="{{ Storage::url($marketing_file->photo) }}"
                                                                        alt="..."
                                                                        style="width: 100%; height: 200px; background-position: center; background-size: contain, cover;">
                                                                    <figcaption
                                                                        class="overlay-panel overlay-background overlay-fade overlay-icon">
                                                                        <a class="icon md-search"
                                                                            href="{{ Storage::url($marketing_file->photo) }}"></a>
                                                                    </figcaption>
                                                                </figure>
                                                                <div class="card-block">
                                                                    <h6 class="card-title">
                                                                        <i class="icon md-image"></i>
                                                                        {{ $marketing_file->original_name }}
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Google Map --}}
                                <div class="tab-pane" id="GoogleMapTab" role="tabpanel">
                                    <h4 class="card-title">
                                        Google Map
                                    </h4>
                                    <hr>
                                    @include('components.google_map')
                                </div>

                                {{-- Owner Agent Information --}}
                                <div class="tab-pane" id="OwnerAgentInfo" role="tabpanel">
                                    <div class="card">
                                        <h4 class="card-title">
                                            Contact Information
                                        </h4>
                                        <hr>
                                        <div class="card-block p-0">

                                            <p data-info-type="phone" class="mb-10 text-nowrap">
                                                <i class="icon md-account mr-10"></i>
                                                <span class="text-break">
                                                    {{ $marketing_edit->name ?? '' }}
                                                </span>
                                            </p>

                                            <p data-info-type="email" class="mb-10 text-nowrap">
                                                <i class="icon md-phone mr-10"></i>
                                                <span class="text-break">
                                                    <a href="mailto:{{ $marketing_edit->phone ?? '' }}">
                                                        {{ $marketing_edit->phone ?? '' }}
                                                    </a>
                                                </span>
                                            </p>

                                            <p data-info-type="email" class="mb-10 text-nowrap">
                                                <i class="icon md-email mr-10"></i>
                                                <span class="text-break">
                                                    <a href="mailto:{{ $marketing_edit->email ?? '' }}">
                                                        {{ $marketing_edit->email ?? '' }}
                                                    </a>
                                                </span>
                                            </p>

                                            <p data-info-type="address" class="mb-10 text-nowrap">
                                                <i class="icon md-pin mr-10"></i>
                                                <span class="text-break">
                                                    {{ $marketing_edit->address ?? '' }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                {{-- Remark --}}
                                <div class="tab-pane" id="Remark" role="tabpanel">
                                    <div class="col-md-12 col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="card-title">
                                                    Remark
                                                </h4>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('marketing_team.edit', $marketing_edit->id) }}"
                                                    class="btn btn-success float-right mr-3">
                                                    <i class="fa fa-edit"></i>
                                                    Edit
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>
                                        {{ $marketing_edit->remark }}
                                    </p>
                                </div>

                                {{-- Marketing --}}
                                <div class="tab-pane" id="Marketing" role="tabpanel">
                                    <div class="col-md-12 col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="card-title">
                                                    Marketing
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>
                                        @include('components.marketing_information')
                                    </p>
                                </div>

                                {{-- Visitor --}}
                                <div class="tab-pane" id="Visitor" role="tabpanel">
                                    <div class="col-md-12 col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="card-title">
                                                    Visitors History
                                                </h4>
                                            </div>

                                            <div class="col-md-6">
                                                <a href="#" class="btn btn-success float-right mr-3"
                                                    data-target="#exampleNiftyFadeScale" data-toggle="modal">
                                                    <i class="fa fa-add"></i>
                                                    Add New Visitor
                                                </a>
                                                @include('components.visitor.visitor_create')
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    @include('components.visitor.visitor_operations')
                                </div>

                                {{-- Visitors Report --}}
                                <div class="tab-pane" id="VisitorReport" role="tabpanel">
                                    <div class="col-md-12 col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="card-title">
                                                    Visitors Report
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                </div>


                                {{-- Visitors Report --}}
                                <div class="tab-pane" id="FollowUpHistory" role="tabpanel">
                                    <div class="col-md-12 col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="card-title">
                                                    Follow Up History
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                </div>


                                {{-- Reject Status --}}
                                <div class="tab-pane" id="Reject" role="tabpanel">
                                    <div class="col-md-12 col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="card-title">
                                                    Reject
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    @include('components.reject_information')
                                </div>


                                {{-- Follow Up(Call History) --}}
                                <div class="tab-pane" id="CallHistory" role="tabpanel">
                                    <div class="col-md-12 col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="card-title">
                                                    Follow Up(Call History)
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    @include('components.call_history')
                                </div>

                                {{-- appointments --}}
                                <div class="tab-pane" id="Appointments" role="tabpanel">
                                    <div class="col-md-12 col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="card-title">
                                                    Appointments
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    @include('components.appointment_lists')
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
@endsection
