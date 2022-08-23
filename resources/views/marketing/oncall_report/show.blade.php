@extends('layouts.menu.marketing')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">
                Oncall Report Details
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('marketing_dahsboard.index') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    Oncall Report Details
                </li>
            </ol>
        </div>

        <div class="page-content container-fluid">
            <div class="panel">
                <div class="panel-body container-fluid">
                    <div class="row row-lg">
                        <div class="col-lg-12">
                            <div class="example-wrap">
                                <h4 class="example-title">Oncall Report</h4>
                                <div class="example table-responsive">
                                    <table class="table" style="width: 100%">
                                        <tbody>
                                            <tr>
                                                <th class="data-property" style="width: 1%;">
                                                    #
                                                </th>
                                                <th class="data-property" style="width: 5%;">
                                                    Code
                                                </th>
                                                <th class="data-property" style="width: 10%;">
                                                    Call User <br> (ဖုန်းခေါ်ဆိုသူ)
                                                </th>
                                                <th class="data-property" style="width: 10%;">
                                                    Call Date <br> (ခေါ်ဆိုသည့်ရက်)
                                                </th>
                                                <th class="data-property" style="width: 10%;">
                                                    Next Time <br> (နောက်တစ်ကြိမ် ခေါ်ရမည့်ရက်)
                                                </th>
                                                <th class="data-property" style="width: 10%;">
                                                    Remark <br> (မှတ်ချက်)
                                                </th>
                                                <th class="data-property" style="width: 10%;">
                                                    Actions
                                                </th>
                                            </tr>
                                            @foreach ($follow_ups as $key => $follow_up)
                                                <tr>
                                                    <td>
                                                        {{ $key + 1 }}
                                                    </td>
                                                    <td>
                                                        {{ $follow_up->marketing_teams_table->code ?? '' }}
                                                    </td>
                                                    <td>
                                                        {{ $follow_up->follow_up_user->name ?? '' }}
                                                    </td>
                                                    <td>
                                                        {{ $follow_up->date_time ?? '' }}
                                                    </td>
                                                    <td>
                                                        {{ $follow_up->follow_up_date ?? '' }}
                                                    </td>
                                                    <td>
                                                        {{ $follow_up->follow_up_remark ?? '' }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('marketing_team.show', $follow_up->marketing_team_id) }}"
                                                            class="btn btn-success btn-xs">
                                                            Property Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="example-wrap">
                                <h4 class="example-title">
                                    Appointment
                                </h4>
                                <div class="example table-responsive">
                                    <table class="table" style="width: 100%">
                                        <tbody>
                                            <tr>
                                                <th class="data-property" style="width: 1%;">
                                                    #
                                                </th>
                                                <th class="data-property" style="width: 7%;">
                                                    Code
                                                </th>
                                                <th class="data-property" style="width: 7%;">
                                                    Call User (ဖုန်းခေါ်ဆိုသူ)
                                                </th>
                                                <th class="data-property" style="width: 10%;">
                                                    Call Date (ခေါ်ဆိုသည့်ရက်)
                                                </th>
                                                <th class="data-property" style="width: 10%;">
                                                    Appointment Date
                                                </th>
                                                <th class="data-property" style="width: 5%;">
                                                    Contact Person
                                                </th>
                                                <th class="data-property" style="width: 10%;">
                                                    Appointment Location
                                                </th>
                                                <th class="data-property" style="width: 10%;">
                                                    Remark
                                                </th>
                                                <th class="data-property" style="width: 5%;">
                                                    Actions
                                                </th>
                                            </tr>
                                            @foreach ($appointments as $key => $appointment)
                                                <tr>
                                                    <td>
                                                        {{ $key + 1 }}
                                                    </td>
                                                    <td>
                                                        {{ $appointment->marketing_teams_table->code ?? '' }}
                                                    </td>
                                                    <td>
                                                        {{ $appointment->user_table->name ?? '' }}
                                                    </td>
                                                    <td>
                                                        {{ $appointment->appointment_date ?? '' }}
                                                    </td>
                                                    <td>
                                                        {{ $appointment->appointment_date_time ?? '' }}
                                                    </td>
                                                    <td>
                                                        {{ $appointment->appointment_person ?? '' }}
                                                    </td>
                                                    <td>
                                                        {{ $appointment->appointment_location ?? '' }}
                                                    </td>
                                                    <td>
                                                        {{ $appointment->appointment_remark ?? '' }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('marketing_team.show', $follow_up->marketing_team_id) }}"
                                                            class="btn btn-success btn-xs">
                                                            Property Detail
                                                        </a>
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
        </div>
    </div>
@endsection
