@section('js')
 <script type="text/javascript">
   $(document).on('click', '.pilih', function (e) {
                document.getElementById("nama_obat").value = $(this).attr('data-nama_obat');
                document.getElementById("id_obat").value = $(this).attr('data-id_obat');
                $('#myModal').modal('hide');
            });

            // $(document).on('click', '.pilih_anggota', function (e) {
            //     document.getElementById("anggota_id").value = $(this).attr('data-anggota_id');
            //     document.getElementById("anggota_nama").value = $(this).attr('data-anggota_nama');
            //     $('#myModal2').modal('hide');
            // });
          
             $(function () {
                $("#lookup, #lookup2").dataTable();
            });

        </script>

@stop
@section('css')

@stop
@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('transaksis.store') }}" enctype="multipart/form-data">
    @csrf
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Tambah Transaksi baru</h4>
                    
                        <div class="form-group{{ $errors->has('id_transaksi') ? ' has-error' : '' }}">
                            <label for="id_transaksi" class="col-md-4 control-label">Kode Transaksi</label>
                            <div class="col-md-6">
                                <input id="id_transaksi" type="text" class="form-control" name="id_transaksi" value="{{ $kode }}" required readonly="">
                                @if ($errors->has('id_transaksi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_transaksi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('id_obat') ? ' has-error' : '' }}">
                            <label for="id_obat" class="col-md-4 control-label">Obat</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="nama_obat" type="text" class="form-control" readonly="" required>
                                <input id="id_obat" type="hidden" name="id_obat" value="{{ old('id_obat') }}" required readonly="">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-secondary" data-toggle="modal" data-target="#myModal"><b>Cari Buku</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('id_obat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_obat') }}</strong>
                                    </span>
                                @endif
                                 
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jumlah') ? ' has-error' : '' }}">
                            <label for="jumlah" class="col-md-4 control-label">jumlah</label>
                            <div class="col-md-6">
                                <input id="jumlah" type="text" class="form-control" name="jumlah" value="{{ old('jumlah') }}">
                                @if ($errors->has('jumlah'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jumlah') }}</strong>
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
                        <a href="{{route('transaksis.index')}}" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</form>


  <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content" style="background: #fff;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cari Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                        <table id="lookup" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Obat</th>
                                    <th>Khasiat</th>
                                    <th>Stok</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($obats as $data)
                                <tr class="pilih" data-id_obat="<?php echo $data->id; ?>" data-nama_obat="<?php echo $data->nama_obat; ?>" >
                                    <td>{{$data->nama_obat}}</td>
                                    <td>{{$data->khasiat}}</td>
                                    <td>{{$data->stok}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div>


  <!-- Modal -->
        {{-- <div class="modal fade bd-example-modal-lg" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content" style="background: #fff;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cari Anggota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                        <table id="lookup" class="table table-bordered table-hover table-striped">
                            <thead>
                        <tr>
                          <th>
                            Nama
                          </th>
                          <th>
                            NPM
                          </th>
                          <th>
                            Prodi
                          </th>
                          <th>
                            Jenis Kelamin
                          </th>
                        </tr>
                      </thead>
                            <tbody>
                                @foreach($anggotas as $data)
                                <tr class="pilih_anggota" data-anggota_id="<?php echo $data->id; ?>" data-anggota_nama="<?php echo $data->nama; ?>" >
                                    <td class="py-1">
                          @if($data->user->gambar)
                            <img src="{{url('images/user', $data->user->gambar)}}" alt="image" style="margin-right: 10px;" />
                          @else
                            <img src="{{url('images/user/default.png')}}" alt="image" style="margin-right: 10px;" />
                          @endif

                            {{$data->nama}}
                          </td>
                          <td>
                            {{$data->npm}}
                          </td>

                          <td>
                          @if($data->prodi == 'TI')
                            Teknik Informatika
                          @elseif($data->prodi == 'SI')
                            Sistem Informasi
                          @else
                            Kesehatan Masyarakat
                          @endif
                          </td>
                          <td>
                            {{$data->jk === "L" ? "Laki - Laki" : "Perempuan"}}
                          </td>
                        </tr>
                                @endforeach
                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div> --}}
@endsection