<!-- Core  -->
<script src="{{ asset('assets/vendor/babel-external-helpers/babel-external-helpersfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/vendor/jquery/jquery.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/vendor/popper-js/umd/popper.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/bootstrap.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/vendor/animsition/animsition.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/vendor/mousewheel/jquery.mousewheel.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/vendor/asscrollbar/jquery-asScrollbar.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/vendor/asscrollable/jquery-asScrollable.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/vendor/ashoverscroll/jquery-asHoverScroll.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/vendor/waves/waves.minfd53.js?v4.0.1') }}"></script>

<!-- Plugins -->
<script src="{{ asset('assets/vendor/switchery/switchery.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/vendor/intro-js/intro.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/vendor/screenfull/screenfull.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/vendor/slidepanel/jquery-slidePanel.minfd53.js?v4.0.1') }}"></script>


<!-- Scripts -->
<script src="{{ asset('assets/js/State.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/js/Component.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/js/Plugin.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/js/Base.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/js/Config.minfd53.js?v4.0.1') }}"></script>

<script src="{{ asset('assets/assets/js/Section/Menubar.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/assets/js/Section/Sidebar.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/assets/js/Section/PageAside.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/assets/js/Plugin/menu.minfd53.js?v4.0.1') }}"></script>

<script src="{{ asset('assets/vendor/bootstrap-table/bootstrap-table.minfd53.js?v4.0.1') }}"></script>
<script
src="{{ asset('assets/vendor/bootstrap-table/extensions/mobile/bootstrap-table-mobile.minfd53.js?v4.0.1') }}">
</script>

<!-- Config -->
<script src="{{ asset('assets/js/config/colors.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/assets/js/config/tour.minfd53.js?v4.0.1') }}"></script>
<script>
    Config.set('assets', 'assets');
</script>

<!-- Page -->
<script src="{{ asset('assets/assets/js/Site.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/js/Plugin/asscrollable.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/js/Plugin/slidepanel.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/js/Plugin/switchery.minfd53.js?v4.0.1') }}"></script>

<script src="{{ asset('assets/js/Plugin/matchheight.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/js/Plugin/jvectormap.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/js/Plugin/peity.minfd53.js?v4.0.1') }}"></script>
<script src="{{ asset('assets/assets/examples/js/dashboard/v1.minfd53.js?v4.0.1') }}"></script>

<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

@yield('script')

<script type="text/javascript">
    $('.del_confirm').click(function(event) {
        var form = $(this).closest("form");
        event.preventDefault();
        Swal.fire({
            text: "Are you sure you want to delete this record?",
            showCancelButton: true,
            customClass: {
                confirmButton: 'btn btn-primary me-3',
                cancelButton: 'btn btn-label-secondary'
            },
            buttonsStyling: false,
            buttons: true,
            dangerMode: true,
        }).then((res) => {
            if (res.isConfirmed) {
                form.submit();
            }
        });
    });
</script>
</body>

</html>
