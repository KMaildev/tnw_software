@extends('layouts.main')
@section('content')
    <style>
        /* -------------- Biometric Authentication ------------- */
        .biometric-register-btn,
        .biometric-data {
            width: 120px;
            padding: 15px;
            box-shadow: none !important;
            border: 1px solid #ddd;
            border-radius: 10px;
            text-transform: none;
            position: relative;
        }

        .biometric-register-btn i.fa-fingerprint,
        .biometric-data i.fa-fingerprint {
            font-size: 38px;
        }

        .biometric-data i.fa-fingerprint {
            color: #fe4f60;
        }

        .biometric-data .biometric-delete-btn {
            color: #fe4f60;
            width: 25px;
            height: 25px;
            border-radius: 100%;
            background: #f5f5f5;
            line-height: 25px;
            position: absolute;
            top: 3px;
            right: 3px;
        }

        .biometric-login-btn {
            width: 120px;
            padding: 15px;
            box-shadow: none !important;
            border: 1px solid #ddd;
            border-radius: 10px;
            text-transform: none;
        }

        .biometric-login-btn i.fa-fingerprint {
            font-size: 38px;
        }
    </style>
    <div class="page">
        <div class="page-content container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <!-- Page Widget -->
                    <div class="card card-shadow text-center">
                        <div class="card-block">
                            <a class="avatar avatar-lg" href="javascript:void(0)">
                                <img src="{{ asset('global/portraits/5.jpg') }}" alt="...">
                            </a>
                            <h4 class="profile-user">
                                {{ $employee->name }}
                            </h4>
                            <p class="profile-job">Art director</p>
                            <p>
                                {{ $employee->department ? $employee->department->title : '-' }}
                            </p>
                        </div>
                    </div>
                    <!-- End Page Widget -->
                </div>

                <div class="col-lg-9">
                    <!-- Panel -->
                    <div class="panel">
                        <div class="panel-body nav-tabs-animate nav-tabs-horizontal" data-plugin="tabs">
                            <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="active nav-link" data-toggle="tab" href="#activities"
                                        aria-controls="activities" role="tab">
                                        Biometric
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-toggle="tab" href="#profile" aria-controls="profile"
                                        role="tab">Profile
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active animation-slide-left" id="activities" role="tabpanel">
                                    <br>
                                    @foreach ($biometrics as $biometric)
                                        <a href="{{ route('biometric_del', $biometric->id) }}" class="btn biometric-data">
                                            <i class="fas fa-fingerprint"></i>
                                            <p class="mb-0">Biometric {{ $loop->iteration }}</p>
                                            <i class="fas fa-trash-alt biometric-delete-btn"
                                                data-id="{{ $biometric->id }}"></i>
                                        </a>
                                    @endforeach

                                    <span class="biometric-data-component"></span>
                                    <a href="#" class="btn biometric-register-btn">
                                        <i class="fas fa-fingerprint"></i>
                                        <p class="mb-0"><i class="fas fa-plus-circle"></i></p>
                                    </a>
                                </div>

                                <div class="tab-pane animation-slide-left" id="profile" role="tabpanel">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="pr-20">
                                                    <a class="avatar" href="javascript:void(0)">
                                                        <img class="img-fluid" src="../../global/portraits/5.jpg"
                                                            alt="...">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-5">Terrance Arnold
                                                        <small>posted a new blog</small>
                                                    </h5>
                                                    <small>active 14 minutes ago</small>
                                                    <div class="profile-brief">
                                                        <div class="media">
                                                            <a class="pr-20">
                                                                <img class="w-160"
                                                                    src="../../global/photos/animal-1-240x160.jpg"
                                                                    alt="...">
                                                            </a>
                                                            <div class="media-body pl-20">
                                                                <h4 class="mt-0 mb-5">Getting Started</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Integer nec odio. Praesent libero. Sed
                                                                    cursus ante dapibus diam. Sed nisi. Nulla quis
                                                                    sem at nibh elementum imperdiet. Duis sagittis
                                                                    ipsum. Praesent mauris.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="pr-20">
                                                    <a class="avatar" href="javascript:void(0)">
                                                        <img class="img-fluid" src="../../global/portraits/2.jpg"
                                                            alt="...">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-5">Ida Fleming
                                                        <small>posted an updated</small>
                                                    </h5>
                                                    <small>active 14 minutes ago</small>
                                                    <div class="profile-brief">“Check if it can be corrected with overflow
                                                        : hidden”</div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="pr-20">
                                                    <a class="avatar" href="javascript:void(0)">
                                                        <img class="img-fluid" src="../../global/portraits/4.jpg"
                                                            alt="...">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-5">Owen Hunt
                                                        <small>posted a new note</small>
                                                    </h5>
                                                    <small>active 14 minutes ago</small>
                                                    <div class="profile-brief">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit.
                                                        Integer nec odio. Praesent libero. Sed cursus ante
                                                        dapibus diam. Sed nisi. Nulla quis sem at nibh elementum
                                                        imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce
                                                        nec tellus sed augue semper porta. Mauris massa.</div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="pr-20">
                                                    <a class="avatar" href="javascript:void(0)">
                                                        <img class="img-fluid" src="../../global/portraits/2.jpg"
                                                            alt="...">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-5">Ida Fleming
                                                        <small>posted an new activity comment</small>
                                                    </h5>
                                                    <small>active 14 minutes ago</small>
                                                    <div class="profile-brief">Cras sit amet nibh libero, in gravida nulla.
                                                        Nulla vel
                                                        metus.</div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="pr-20">
                                                    <a class="avatar" href="javascript:void(0)">
                                                        <img class="img-fluid" src="../../global/portraits/3.jpg"
                                                            alt="...">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-5">Julius
                                                        <small>uploaded 4 photos</small>
                                                    </h5>
                                                    <small>active 14 minutes ago</small>
                                                    <div class="profile-brief clearfix">
                                                        <img class="profile-uploaded"
                                                            src="../../global/photos/animal-2-240x160.jpg" alt="...">
                                                        <img class="profile-uploaded"
                                                            src="../../global/photos/animal-3-240x160.jpg" alt="...">
                                                        <img class="profile-uploaded"
                                                            src="../../global/photos/animal-4-240x160.jpg" alt="...">
                                                        <img class="profile-uploaded"
                                                            src="../../global/photos/animal-5-240x160.jpg" alt="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Panel -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            biometricData();

            function biometricData() {
                $.ajax({
                    url: '/profile/biometric-data',
                    type: 'GET',
                    success: function(res) {
                        $('.biometric-data-component').html(res);
                        console.log(res);
                    }
                });
            }

            const register = (event) => {
                event.preventDefault()
                new Larapass({
                        register: 'webauthn/register',
                        registerOptions: 'webauthn/register/options'
                    }).register()
                    .then(function(response) {
                        // alert("W");
                        // Toast.fire({
                        //     icon: 'success',
                        //     title: 'Biometric data is successfully created.'
                        // });
                        biometricData();
                    })
                    .catch(function(response) {
                        console.log(response);
                    });
            }
            $('.biometric-register-btn').on('click', function(event) {
                register(event);
            });


            // $('.biometric-delete-btn').click(function(event) {
            //     event.preventDefault();
            //     var id = $(this).data('id');
            //     swal({
            //         text: "Are you sure you want to delete?",
            //         showCancelButton: true,
            //         customClass: {
            //             confirmButton: 'btn btn-primary me-3',
            //             cancelButton: 'btn btn-label-secondary'
            //         },
            //         buttonsStyling: false,
            //         buttons: true,
            //         dangerMode: true,
            //     }).then((willDelete) => {
            //         if (willDelete) {
            //             if (willDelete) {
            //                 $.ajax({
            //                     url: `/profile/biometric-data/${id}`,
            //                     type: 'DELETE'
            //                 }).done(function(res) {
            //                     biometricData();
            //                 });
            //             }
            //         }
            //     });
            // });

            // $(document).on('click', '.biometric-delete-btn', function(event) {
            //     event.preventDefault();
            //     var id = $(this).data('id');
            //     swal({
            //             text: "Are you sure you want to delete?",
            //             buttons: true,
            //             dangerMode: true,
            //         })
            //         .then((willDelete) => {
            //             if (willDelete) {
            //                 $.ajax({
            //                     url: `/profile/biometric-data/${id}`,
            //                     type: 'DELETE'
            //                 }).done(function(res) {
            //                     biometricData();
            //                 });
            //             }
            //         });
            // });
        });
    </script>
@endsection
