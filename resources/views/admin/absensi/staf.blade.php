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
        <small>Absensi Staff</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Absensi</li>
      </ol>
</section>
<section class="content">
    <form class="" method="post" action="/absenstaf">
    @csrf
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="col col-sm-1">
                        <label>Tanggal</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" class="form-control" style="width:17%" name="tgl_absen_staf" required>
                    </div>
                <!-- /.input group -->
            </div>
<!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>NIP/ID</th>
                    <th>Nama</th>
                    <th>Hadir</th>
                    <th>Sakit</th>
                    <th>Alfa</th>
                    <th>Izin</th>
                    <th>Keterangan</th>
                </tr>
                </thead>
                
                <tbody>
                <?php $nomer = 1; ?>
                <?php $getid = array(); ?>
                @foreach ($staf as $row)
                <tr>
                <?php $getid[$nomer] = $row->nip_staf; ?>
                    <td>{{$nomer}}</td>
                    <td>{{$row->nip_staf}}</td>
                    <td>{{$row->nama_staf}}</td>
                    <input type="hidden" name="nip_staf[]" value="{{$getid[$nomer]}}">
                    <!-- <td><input type = "checkbox" name = "nis[]" value = "{{$getid[$nomer]}}"/></td> -->
                    <td><input type="radio" name="absen_staf{{$row->nip_staf}}" value="hadir"></td>
                    <td><input type="radio" name="absen_staf{{$row->nip_staf}}" value="sakit"></td>
                    <td><input type="radio" name="absen_staf{{$row->nip_staf}}" value="alfa"></td>
                    <td><input type="radio" name="absen_staf{{$row->nip_staf}}" value="izin"></td>
                    <td><input name="keterangan_staf{{$row->nip_staf}}" type="text" class="form-control" id="keterangan" placeholder="Keterangan"></td>
                <?php $nomer++; ?>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>NIP/ID</th>
                    <th>Nama</th>
                    <th>Hadir</th>
                    <th>Sakit</th>
                    <th>Alfa</th>
                    <th>Izin</th>
                    <th>Keterangan</th>
                </tr>
                </tfoot>

                </table>
                <br>
<!--                 <table class="table table-bordered table-striped">
                    <tr>
                        <th>Hadir</th>
                        <th>Sakit</th>
                        <th>Alfa</th>
                        <th>Izin</th>
                        <th>Keterangan</th>
                    </tr>
                    <tr>
                        <td><input type="radio" name="absen" value="hadir" required></td>
                        <td><input type="radio" name="absen" value="sakit"></td>
                        <td><input type="radio" name="absen" value="alfa"></td>
                        <td><input type="radio" name="absen" value="izin"></td>
                        <td><input name="keterangan" type="text" class="form-control" id="keterangan" placeholder="Keterangan"></td>
                    </tr>
                </table> -->
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