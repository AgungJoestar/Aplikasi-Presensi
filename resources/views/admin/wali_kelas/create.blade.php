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
        <small>Tambah Walikelas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Walikelas</li>
      </ol>
</section>
<section class="content">
    <form class="" method="post" action="/tambahwalikelas">
    @csrf
    <div class="col-xs-12">
        <div class="box">
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
                <br>
                <table class="table table-bordered table-striped">
                  <tr>
                    <label for="user_type" class="col-sm-2">Guru</label>
                    <div class="col-sm-10">
                    <select name="nip" id="guru" class="form-control">
                    @foreach ($guru as $row)
                        <option name="nip" value="{{$row->nip}}" required>{{$row->nip}} - {{$row->nama}}</option>
                    @endforeach
                    </select>
                    </div>
                </tr>
                    <tr>
                    <label for="user_type" class="col-sm-2">Kelas</label>
                    <div class="col-sm-10">
                    <select name="id_kelas" id="walikelas" class="form-control">
                    <option name="id_kelas" value="" required> </option>
                    @foreach ($kelas as $row)
                        <option name="id_kelas" value="{{$row->nama}}" required>{{$row->kode_kelas}} - {{$row->nama}}</option>
                    @endforeach
                    </select>
                    </div>
                </tr>
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