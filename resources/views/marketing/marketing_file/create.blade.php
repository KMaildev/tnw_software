@extends('layouts.menu.marketing')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">
                Makerting Team
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('marketing_team.index') }}">
                        Makerting Team
                    </a>
                </li>
                <li class="breadcrumb-item active">
                    Photo Upload
                </li>
            </ol>
        </div>

        <div class="page-content container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Photo Upload
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('marketing_file.store') }}" class="dropzone" id="my-great-dropzone">
                                <input type="hidden" value="{{ $id }}" name="marketing_team_id" required>
                            </form>
                            <br>
                            <a href="" class="btn btn-success pull-left">
                                <i class="fa fa-upload"></i>
                                Upload
                            </a>
                        </div>

                        <br><br>
                        <ul class="blocks blocks-100 blocks-xxl-4 blocks-lg-3 blocks-md-2" data-plugin="filterable">
                            @foreach ($marketing_files as $marketing_file)
                                <li data-type="animal">
                                    <div class="card card-shadow">
                                        <figure class="card-img-top overlay-hover overlay">
                                            <img class="overlay-figure overlay-scale"
                                                src="{{ Storage::url($marketing_file->photo) }}" alt="..."
                                                style="width: 100%; height: 200px; background-position: center; background-size: contain, cover;">
                                            <figcaption class="overlay-panel overlay-background overlay-fade overlay-icon">
                                                <a class="icon md-search"
                                                    href="{{ Storage::url($marketing_file->photo) }}"></a>
                                            </figcaption>
                                        </figure>
                                        <div class="card-block">
                                            <h6 class="card-title">
                                                <i class="icon md-image"></i>
                                                {{ $marketing_file->original_name }}
                                            </h6>
                                            <form action="{{ route('marketing_file.destroy', $marketing_file->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="#" class="text-danger del_confirm" id="confirm-text">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                    Remove
                                                </a>
                                            </form>
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
@endsection

@section('script')
    <script>
        Dropzone.options.myGreatDropzone = {
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: false,
            maxFilesize: 10000,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function(file, response) {
                console.log(file);
            },
        }
    </script>
@endsection
