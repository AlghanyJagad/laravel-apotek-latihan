@section('js')
<script type="text/javascript">
    $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

} );
</script>
@stop
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-left">
                        <i class="mdi mdi-poll-box text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                        <p class="mb-0 text-right">Obat</p>
                        <div class="fluid-container">
                            <h3 class="font-weight-medium text-right mb-0">{{$obat->count()}}</h3>
                        </div>
                    </div>
                </div>
                <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Jumlah Obat
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-left">
                        <i class="mdi mdi-receipt text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                        <p class="mb-0 text-right">Transaksi</p>
                        <div class="fluid-container">
                            <h3 class="font-weight-medium text-right mb-0">{{$datas->count()}}</h3>
                        </div>
                    </div>
                </div>
                <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Jumlah Transaksi
                </p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

            {{-- <div class="card-body">
                <h4 class="card-title">Data Transaksi</h4>

                <div class="table-responsive">
                    <table class="table table-striped" id="table">
                        <thead>
                            <tr>
                                <th>
                                    Kode
                                </th>
                                <th>
                                    Obat
                                </th>
                                <th>
                                    Jumlah
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            <tr>
                                <td class="py-1">
                                    <a href="{{route('transaksis.show', $data->id)}}">
                                        {{$data->id_transaksi}}
                                    </a>
                                </td>
                                <td>

                                    {{$data->obat->nama_obat}}

                                </td>

                                <td>
                                    {{$data->jumlah}}
                                </td>
                                <td>
                                    <form action="{{ route('transaksi.update', $data->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('put') }}
                                        <button class="btn btn-info btn-sm"
                                            onclick="return confirm('Anda yakin data ini sudah kembali?')">Sudah Kembali
                                        </button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection