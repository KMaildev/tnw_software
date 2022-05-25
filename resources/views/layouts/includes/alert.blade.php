@if ($message = Session::get('success'))
    <div class="alert dark alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        {{ $message }}
    </div>
@endif


@if ($message = Session::get('error'))
    <div class="alert dark alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        {{ $message }}
    </div>
@endif


@if ($message = Session::get('warning'))
    <div class="alert dark alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        {{ $message }}
    </div>
@endif


@if ($message = Session::get('info'))
    <div class="alert dark alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        {{ $message }}
    </div>
@endif


@if ($errors->any())
    <!-- <div class="alert alert-solid-danger alert-dismissible d-flex align-items-center" role="alert">
    <i class="bx bx-xs bx-store me-2"></i>
    Please check the form below for errors
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    </button>
</div> -->
@endif
