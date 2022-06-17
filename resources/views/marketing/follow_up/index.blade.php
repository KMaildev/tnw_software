@extends('layouts.menu.marketing')
@section('content')
    <div class="page page-user">
        <div class="page-content">
            <!-- Panel -->
            <div class="panel">
                <div class="panel-body">
                    <form class="page-search-form" role="search">
                        <div class="input-search input-search-dark">
                            <i class="input-search-icon wb-search" aria-hidden="true"></i>
                            <input type="text" class="form-control" id="inputSearch" name="search"
                                placeholder="Search Users">
                            <button type="button" class="input-search-close icon wb-close" aria-label="Close"></button>
                        </div>
                    </form>

                    <div class="nav-tabs-horizontal nav-tabs-animate" data-plugin="tabs">
                        <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="active nav-link" data-toggle="tab" href="#today_follow_up"
                                    aria-controls="today_follow_up" role="tab">
                                    Today Follow Up
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-toggle="tab" href="#all_contacts" aria-controls="all_contacts"
                                    role="tab">
                                    All Follow Up
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane animation-fade active" id="today_follow_up" role="tabpanel">
                                <ul class="list-group">
                                    @foreach ($today_followup_lists as $today_followup_list)
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-body align-self-center">
                                                    <h4 class="mt-0 mb-5">
                                                        {{ $today_followup_list->marketing_teams_table->name ?? '' }}
                                                    </h4>
                                                    <div style="background-color: #f1f4f5; margin: 10px; padding: 10px;">
                                                        <p style="color: black;">
                                                            <i class="icon icon-color wb-map" aria-hidden="true"></i>
                                                            No
                                                            ({{ $today_followup_list->marketing_teams_table->no ?? '' }})
                                                            ,
                                                            {{ $today_followup_list->marketing_teams_table->ward_no ?? '' }}
                                                            Ward No,
                                                            {{ $today_followup_list->marketing_teams_table->road ?? '' }}
                                                            Road
                                                        </p>

                                                        <p style="color: black;">
                                                            <i class="icon icon-color fa fa-home" aria-hidden="true"></i>
                                                            Wide:
                                                            {{ $today_followup_list->marketing_teams_table->wide ?? '' }}
                                                        </p>

                                                        <p style="color: black;">
                                                            <i class="icon icon-color fa fa-user" aria-hidden="true"></i>
                                                            Type:
                                                            {{ $today_followup_list->marketing_teams_table->type ?? '' }}
                                                        </p>

                                                        <p style="color: black;">
                                                            <i class="icon icon-color fa fa-usd" aria-hidden="true"></i>
                                                            Price:
                                                            {{ $today_followup_list->marketing_teams_table->price ?? '' }}
                                                        </p>
                                                    </div>



                                                    <div style="background-color: #f1f4f5; margin: 10px; padding: 10px;">

                                                        <p style="color: black;">
                                                            <i class="icon icon-color fa fa-user" aria-hidden="true"></i>
                                                            O/A:
                                                            {{ $today_followup_list->marketing_teams_table->owner_or_agent_type ?? '' }}
                                                        </p>

                                                        <p style="color: black;">
                                                            <i class="icon icon-color fa fa-phone" aria-hidden="true"></i>
                                                            Phone:
                                                            {{ $today_followup_list->marketing_teams_table->phone_no ?? '' }}
                                                        </p>

                                                        <p style="color: black;">
                                                            <i class="icon icon-color fa fa-envelope"
                                                                aria-hidden="true"></i>
                                                            Email:
                                                            {{ $today_followup_list->marketing_teams_table->email ?? '' }}
                                                        </p>

                                                        <p style="color: black;">
                                                            <i class="icon icon-color fa fa-calendar"
                                                                aria-hidden="true"></i>
                                                            Date Time:
                                                            {{ $today_followup_list->date_time ?? '' }}
                                                        </p>

                                                        <p style="color: black;">
                                                            <i class="icon icon-color fa fa-pen" aria-hidden="true"></i>
                                                            Follow Up Type:
                                                            {{ $today_followup_list->follow_up_type ?? '' }}
                                                        </p>

                                                        <p style="color: black;">
                                                            <i class="icon icon-color fa fa-clipboard"
                                                                aria-hidden="true"></i>
                                                            Remark:
                                                            {{ $today_followup_list->follow_up_remark ?? '' }}
                                                        </p>

                                                        <p style="color: black;">
                                                            <i class="icon icon-color fa fa-clipboard"
                                                                aria-hidden="true"></i>
                                                            Additional Note:
                                                            {{ $today_followup_list->additional_note ?? '' }}
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="pl-0 pl-sm-50 mt-50 mt-sm-0 align-self-center">
                                                    @if ($today_followup_list->follow_up_status == 'finished')
                                                        <span style="color: green">
                                                            Finished at - {{ $today_followup_list->updated_at }}
                                                        </span>
                                                        <br>
                                                        <span style="color: green">
                                                            By
                                                            {{ strtoupper($today_followup_list->follow_up_user->name ?? '') }}
                                                        </span>
                                                    @endif
                                                    <hr>
                                                    <a href="{{ route('follow_up_now', $today_followup_list->id) }}"
                                                        class="btn btn-outline btn-success btn-sm">
                                                        Follow
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Panel -->
        </div>
    </div>
@endsection
