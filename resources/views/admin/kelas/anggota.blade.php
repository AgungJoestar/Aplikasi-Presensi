@extends('admin.template.base')
@section('content')
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
@if(Session::has('flash_message_fail'))
    <div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span><em> {!! session('flash_message_fail') !!}</em></div>
@endif
<section class="content-header">
      <h1>
        Tabel
        <small>Tambah Anggota Kelas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Anggota Kelas</li>
      </ol>
</section>
<section class="content">
    <form class="" method="post" action="/kelas/anggota/tambahAnggota">
    @csrf
    <div class="col-xs-12">
        <div class="box">
            @foreach ($kelas as $row)
                <h1>{{$row->kode_kelas}} - {{$row->nama}}</h1>
                    <input type="hidden" name="id_kelas" value = "{{$row->id}}">
                    <input type="hidden" name="jenis_kelas" value = "{{$row->jenis_kelas}}">
            @endforeach
            <!-- <div class="box-header">
                <div class="col col-sm-1">
                        <label>Tanggal</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" class="form-control" style="width:17%" name="tgl_absen" required>
                    </div> -->
                <!-- /.input group -->
            <!-- </div> -->
<!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>Angkatan</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Pilih</th>
                </tr>
                </thead>
                
                <tbody>
                <?php $nomer = 1; ?>
                <?php $getid = array(); ?>
                @foreach ($siswa as $row)
                <tr>
                <?php $getid[$nomer] = $row->nis; ?>
                    <td>{{$nomer}}</td>
                    <td>{{$row->angkatan}}</td>
                    <td>{{$row->nis}}</td>
                    <td>{{$row->nama_siswa}}</td>
                    <td><input type = "checkbox" name = "nis[]" value = "{{$getid[$nomer]}}"/></td>
                <?php $nomer++; ?>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Pilih</th>
                </tr>
                </tfoot>

                </table>
            </div>
<!-- /.box-body -->
            <div class="box-footer">
                <button type="button" onclick="history.back();" class="btn btn-danger">Back</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
        </div>
    </div>
</form>
</section>
@endsection