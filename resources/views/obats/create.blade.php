@section('js')

<script type="text/javascript">
    $(document).ready(function() {
    $(".users").select2();
});

</script>

<script type="text/javascript">
    function readURL() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(input).prev().attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $(".uploads").change(readURL)
            $("#f").submit(function(){
                // do ajax submit or just classic form submit
              //  alert("fake subminting")
                return false
            })
        })
</script>
@stop

@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('obats.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-12 d-flex align-items-stretch grid-margin">
            <div class="row flex-grow">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tambah Obat baru</h4>

                            <div class="form-group{{ $errors->has('nama_obat') ? ' has-error' : '' }}">
                                <label for="nama_obat" class="col-md-4 control-label">Nama Obat</label>
                                <div class="col-md-6">
                                    <input id="nama_obat" type="text" class="form-control" name="nama_obat"
                                        value="{{ old('nama_obat') }}" required>
                                    @if ($errors->has('nama_obat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_obat') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('khasiat') ? ' has-error' : '' }}">
                                <label for="khasiat" class="col-md-4 control-label">khasiat</label>
                                <div class="col-md-6">
                                    <input id="khasiat" type="text" class="form-control" name="khasiat"
                                        value="{{ old('khasiat') }}" required>
                                    @if ($errors->has('khasiat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('khasiat') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('stok') ? ' has-error' : '' }}">
                                <label for="stok" class="col-md-4 control-label">stok</label>
                                <div class="col-md-6">
                                    <input id="stok" type="number" class="form-control" name="stok"
                                        value="{{ old('stok') }}" required>
                                    @if ($errors->has('stok'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('stok') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary" id="submit">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-danger">
                                Reset
                            </button>
                            <a href="{{route('obats.index')}}" class="btn btn-light pull-right">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>
@endsection