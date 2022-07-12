<div class="row">
    <div class="col-lg-3 col-sm-12 col-md-3">
        {{-- Generan Search --}}
        <form action="{{ route('marketing_team.index') }}" method="GET" autocomplete="off">
            <div class="form-group">
                <label for="" style="font-size: 12px; font-style: italic;">
                    Enter Code, House Style, Price, Road, No, Phone, Remark
                </label>
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Enter Here..."
                        value="{{ old('search') }}">
                </div>
            </div>
        </form>

    </div>
</div>
