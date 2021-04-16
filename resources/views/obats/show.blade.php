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

<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Detail <b>{{$obat->nama_obat}}</b> </h4>
                      <form class="forms-sample">

                        <div class="form-group{{ $errors->has('nama_obat') ? ' has-error' : '' }}">
                            <label for="nama_obat" class="col-md-4 control-label">Nama Obat</label>
                            <div class="col-md-6">
                                <input id="nama_obat" type="text" class="form-control" name="nama_obat" value="{{ $obat->nama_obat }}" readonly="">
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
                                <input id="khasiat" type="text" class="form-control" name="khasiat" value="{{ $obat->khasiat }}" readonly>
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
                                <input id="stok" type="text" class="form-control" name="stok" value="{{ $obat->stok }}" readonly>
                                @if ($errors->has('stok'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('stok') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <a href="{{route('obats.index')}}" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
@endsection