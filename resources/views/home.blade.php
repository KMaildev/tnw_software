@extends('layouts.main')
@section('content')
    <div class="page">
        <div class="page-content container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8">
                    <div class="row py-5" style="margin-top: 30px;">

                        <div class="col-lg-3 col-md-3">
                            <a href="{{ route('lawyer.index') }}" style="text-decoration: none;">
                                <div class="card card-block p-25" style="background-color: #903BAA;">
                                    <div class="counter counter-lg">
                                        <div class="white">
                                            <i class="icon icon-circle icon-3x md-home"></i>
                                        </div>
                                        <div class="counter-label text-white">
                                            Property Management
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-3">
                            <a href="{{ route('marketing_dahsboard.index') }}" style="text-decoration: none;">
                                <div class="card card-block p-25" style="background-color: #51a147;">
                                    <div class="counter counter-lg">
                                        <div class="white">
                                            <i class="icon icon-circle icon-3x md-phone"></i>
                                        </div>
                                        <div class="counter-label text-white">
                                            Marketing Team
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="col-lg-3 col-md-3">
                            <a href="{{ route('hr_dahsboard.index') }}" style="text-decoration: none;">
                                <div class="card card-block p-25" style="background-color: #f08b33;">
                                    <div class="counter counter-lg">
                                        <div class="white">
                                            <i class="icon icon-circle icon-3x md-assignment"></i>
                                        </div>
                                        <div class="counter-label text-white">
                                            HR
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-3" hidden>
                            <a href="" style="text-decoration: none;">
                                <div class="card card-block p-25" style="background-color: #2788e5;">
                                    <div class="counter counter-lg">
                                        <div class="white">
                                            <i class="icon icon-circle icon-3x md-assignment"></i>
                                        </div>
                                        <div class="counter-label text-white">
                                            Accounting
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="col-lg-3 col-md-3" hidden>
                            <a href="" style="text-decoration: none;">
                                <div class="card card-block p-25" style="background-color: #b34524;">
                                    <div class="counter counter-lg">
                                        <div class="white">
                                            <i class="icon icon-circle icon-3x md-assignment"></i>
                                        </div>
                                        <div class="counter-label text-white">
                                            Todo List
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-3">
                            <a href="{{ route('file_manager.index') }}" style="text-decoration: none;">
                                <div class="card card-block p-25" style="background-color: #186b62;">
                                    <div class="counter counter-lg">
                                        <div class="white">
                                            <i class="icon icon-circle icon-3x md-file"></i>
                                        </div>
                                        <div class="counter-label text-white">
                                            File Manager
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-3" hidden>
                            <a href="" style="text-decoration: none;">
                                <div class="card card-block p-25" style="background-color: #a23063;">
                                    <div class="counter counter-lg">
                                        <div class="white">
                                            <i class="icon icon-circle icon-3x fa fa-cog"></i>
                                        </div>
                                        <div class="counter-label  text-white">
                                            Setting
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="col-lg-3 col-md-3">
                            <a href="{{ route('activity.index') }}" style="text-decoration: none;">
                                <div class="card card-block p-25" style="background-color: #d1709a;">
                                    <div class="counter counter-lg">
                                        <div class="white">
                                            <i class="icon icon-circle icon-3x md-assignment"></i>
                                        </div>
                                        <div class="counter-label text-white">
                                            Activities
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
