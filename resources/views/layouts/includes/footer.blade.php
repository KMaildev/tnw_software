<script src="{{ asset('global/vendor/babel-external-helpers/babel-external-helpersfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/vendor/jquery/jquery.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/vendor/popper-js/umd/popper.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/vendor/bootstrap/bootstrap.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/vendor/animsition/animsition.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/vendor/mousewheel/jquery.mousewheel.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/vendor/asscrollbar/jquery-asScrollbar.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/vendor/asscrollable/jquery-asScrollable.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/vendor/ashoverscroll/jquery-asHoverScroll.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/vendor/waves/waves.minfd53.js?v4.0.1') }}"></script>

<!-- Plugins -->
<script src="{{ asset('global/vendor/switchery/switchery.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/vendor/intro-js/intro.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/vendor/screenfull/screenfull.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/vendor/slidepanel/jquery-slidePanel.minfd53.js?v4.0.1') }}"></script>

<!-- Plugins For This Page -->
<script src="{{ asset('global/vendor/jvectormap/jquery-jvectormap.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/vendor/jvectormap/maps/jquery-jvectormap-world-mill-enfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/vendor/matchheight/jquery.matchHeight-minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/vendor/peity/jquery.peity.minfd53.js?v4.0.1') }}"></script>


<!-- Scripts -->
<script src="{{ asset('global/js/State.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/js/Component.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/js/Plugin.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/js/Base.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/js/Config.minfd53.js?v4.0.1') }}"></script>

<script src="{{ asset('assets/js/Section/Menubar.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/js/Section/Sidebar.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/js/Section/PageAside.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/js/Plugin/menu.minfd53.js?v4.0.1') }}"></script>

<!-- Config -->
<script src="{{ asset('global/js/config/colors.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/js/config/tour.minfd53.js?v4.0.1') }}"></script>
<script>
    Config.set('assets', 'assets');
</script>

<!-- Page -->
<script src="{{ asset('assets/js/Site.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/js/Plugin/asscrollable.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/js/Plugin/slidepanel.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/js/Plugin/switchery.minfd53.js?v4.0.1') }}"></script>

<script src="{{ asset('global/js/Plugin/matchheight.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/js/Plugin/jvectormap.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/js/Plugin/peity.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/examples/js/dashboard/v1.minfd53.js?v4.0.1') }}"></script>


{{-- My Script --}}
<script src="{{ asset('vendor/larapass/js/larapass.js') }}"></script>
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
<script src="{{ asset('install/select2/js/select2.js') }}"></script>
<script src="{{ asset('install/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('install/bootstrap_token/bootstrap-tokenfield.min.js') }}"></script>
<script src="{{ asset('install/datetime/jquery.datetimepicker.js') }}"></script>
<script src="{{ asset('global/vendor/tablesaw/tablesaw.jqueryfd53.js?v4.0.1') }}"></script>

<script src="{{ asset('install/range_slider/js/ion.rangeSlider.min.js') }}"></script>



@yield('script')
<script type="text/javascript">
    $('.del_confirm').click(function(event) {
        var form = $(this).closest("form");
        event.preventDefault();
        swal({
            text: "Are you sure you want to delete this record?",
            showCancelButton: true,
            customClass: {
                confirmButton: 'btn btn-primary me-3',
                cancelButton: 'btn btn-label-secondary'
            },
            buttonsStyling: false,
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
    });

    // $('#datetimepicker4').datetimepicker();
    let date = new Date();
    let now = `${date.getDate()}/${date.getMonth() + 1}/${date.getFullYear()}`
    $('#datetimepicker4').datetimepicker({
        value: now,
        format: 'Y-m-d h:i A'
    });

    $('#datetimepicker5').datetimepicker({
        value: now,
        format: 'Y-m-d h:i A'
    });


    // Multiple Phone
    $('#tokenfield').tokenfield({
        autocomplete: {
            source: [],
            delay: 100
        },
        showAutocompleteOnFocus: true
    })

    $(document).ready(function() {
        $('#files').on('change', function() {
            var file_length = document.getElementById('files').files.length;
            $('.preview_img').html('');
            for (var i = 0; i < file_length; i++) {
                $('.preview_img').append(
                    `<img src="${URL.createObjectURL(event.target.files[i])}" style="width: 20%; height: 100px; background-size: center; object-fit: cover; border: 3px solid #458cd2; padding: 5px;"/>`
                );
            }
        });
    });


    $('select[id="submit_form"]').on('change', function() {
        this.form.submit();
    })

    function getMarketingTeamSSD() {
        var url = '{{ url('marketing_team_ssd') }}';
        var upload_url = '{{ url('marketing_file_create') }}';

        $.ajax({
            method: 'GET',
            url: url,
            success: function(data) {
                let marketing_team_list = '';
                $.each(JSON.parse(data), function(key, value) {
                    var k = key + 1;

                    var offer_status = value.offer_status;
                    var offer_status = offer_status.split('_').join(' ');
                    var offer_status = offer_status.toUpperCase();

                    if (value.permission_type == 'grant') {
                        var permission_type = "ဂရံ";
                    } else if (value.permission_type == 'permit') {
                        var permission_type = "Permit";
                    } else if (value.permission_type == 'ancestral_land') {
                        var permission_type = "ဘိုးဘွားပိုင်မြေ";
                    }

                    if (value.grant_type) {
                        var grant_type = value.grant_type;
                        var grant_type = "(" + grant_type + ")"
                    } else {
                        var grant_type = '';
                    }

                    if (value.orginal_or_copy === 'Orginal') {
                        var orginal_or_copy = "မူရင်း";
                    } else if (value.orginal_or_copy === 'Copy') {
                        var orginal_or_copy = "မိတ္တူ";
                    }
                    var photo_status = value.photo_status.toUpperCase();

                    marketing_team_list += '<tr>';
                    marketing_team_list += '<td>' + k + '</td>';
                    marketing_team_list += '<td>' + value.user_id + '</td>';
                    marketing_team_list += '<td>' + offer_status + '</td>';
                    marketing_team_list += '<td>' + value.marketing_date + '</td>';
                    marketing_team_list += '<td>' + value.code + '</td>';
                    marketing_team_list += '<td>' + value.no + '</td>';
                    marketing_team_list += '<td>' + value.road + '</td>';
                    marketing_team_list += '<td>' + value.ward + '</td>';
                    marketing_team_list += '<td>' + value.township_id + '</td>';
                    marketing_team_list += '<td>' + value.property_type_id + '</td>';
                    marketing_team_list += '<td>' + value.floor + '</td>';
                    marketing_team_list += '<td>' + value.house_style + '</td>';
                    marketing_team_list += '<td>' + value.price + '</td>';
                    marketing_team_list += '<td>' + value.area_width * value
                        .area_height + '</td>';
                    marketing_team_list += '<td>' + value.area + '</td>';
                    marketing_team_list += '<td>' + permission_type + '  ' + grant_type + '</td>';
                    marketing_team_list += '<td>' + orginal_or_copy + '</td>';
                    marketing_team_list += '<td>' + value.owner_agent + '</td>';
                    marketing_team_list += '<td>' + value.name + '</td>';
                    marketing_team_list += '<td>' + value.phone + '</td>';

                    // Photo
                    marketing_team_list += '<td>';
                    marketing_team_list += '<div class="d-flex flex-column w-100">';
                    marketing_team_list += ' <div class="d-flex justify-content-between">';
                    marketing_team_list += '<span>' + photo_status + '</span>';
                    marketing_team_list += '</div>';
                    marketing_team_list +=
                        '<div class="progress" style="height:3px; margin-bottom: 0">';
                    marketing_team_list +=
                        '<div class="progress-bar bg-danger"style="width: 100%" role="progressbar"></div>';
                    marketing_team_list += '</div>';
                    marketing_team_list += '<div class="d-flex justify-content-between">';
                    marketing_team_list +=
                        '<a href="' + upload_url + '/' + value.id +
                        '" style="font-size: 12px;">Upload</a>';
                    marketing_team_list +=
                        '<a href="' + upload_url + '/' + value.id +
                        '" style="font-size: 12px;">View</a>';
                    marketing_team_list += '</div>';
                    marketing_team_list += '</div>';
                    marketing_team_list += '</td>';

                    // Actions
                    marketing_team_list += '<td>';
                    marketing_team_list += '<div class="btn-group">';
                    marketing_team_list +=
                        ' <button type="button" class="btn btn-info dropdown-toggle btn-xs" id="exampleSizingDropdown3" data-toggle="dropdown" aria-expanded="false">Action</button>';
                    marketing_team_list +=
                        '<div class="dropdown-menu" aria-labelledby="exampleSizingDropdown3" role="menu">';
                    marketing_team_list +=
                        '<a class="dropdown-item" href="#" role="menuitem"><i class="icon md-edit" aria-hidden="true"></i>Edit</a>';
                    marketing_team_list +=
                        '<a class="dropdown-item" href="#" role="menuitem"><i class="icon md-edit" aria-hidden="true"></i>View Detail</a>';
                    marketing_team_list +=
                        '<a class="dropdown-item" href="#" role="menuitem"><i class="icon md-edit" aria-hidden="true"></i>Reject</a>';
                    marketing_team_list += "</div>";
                    marketing_team_list += '</div>';
                    marketing_team_list += '</td>';


                    marketing_team_list += '</tr>';
                });
                $('#marketing_team_lists').html(marketing_team_list);
            },
            error: function(data) {}
        });
    }
</script>
</body>

</html>
