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
                      <h4 class="card-title">Detail Transaksi </h4>
                      <form class="forms-sample">
                        <div class="form-group{{ $errors->has('id_transaksi') ? ' has-error' : '' }}">
                            <label for="id_transaksi" class="col-md-4 control-label">Kode Transaksi</label>
                            <div class="col-md-6">
                                <input id="id_transaksi" type="text" class="form-control" name="id_transaksi" value="{{ $transaksi->id_transaksi }}" readonly="">
                                @if ($errors->has('id_Transaksi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_transaksi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nama_obat') ? ' has-error' : '' }}">
                            <label for="nama_obat" class="col-md-4 control-label">Nama Obat</label>
                            <div class="col-md-6">
                                <input id="nama_obat" type="text" class="form-control" name="nama_obat" value="{{ $transaksi->obat['nama_obat'] }}" readonly="">
                                @if ($errors->has('nama_obat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_obat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('jumlah') ? ' has-error' : '' }}">
                            <label for="jumlah" class="col-md-4 control-label">Jumlah Pembelian</label>
                            <div class="col-md-6">
                                <input id="jumlah" type="text" class="form-control" name="jumlah" value="{{ $transaksi->jumlah }}" readonly>
                                @if ($errors->has('jumlah'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jumlah') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tgl_beli') ? ' has-error' : '' }}">
                            <label for="tgl_beli" class="col-md-4 control-label">Tanggal Pembelian</label>
                            <div class="col-md-6">
                                <input id="tgl_beli" type="text" class="form-control" name="tgl_beli" value="{{ $transaksi->created_at }}" readonly>
                                @if ($errors->has('tgl_beli'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tgl_beli') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <a href="{{route('transaksis.index')}}" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
@endsection