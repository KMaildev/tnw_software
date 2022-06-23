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
<script src="{{ asset('global/vendor/chartist/chartist.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.minfd53.js?v4.0.1') }}">
</script>
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

    $('#datetimepicker4').datetimepicker();


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
</script>
</body>

</html>
