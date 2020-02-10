@extends('admin.template.base')
@section('content')
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
<section class="content-header">
      <h1>
        Lihat
        <small>data guru</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Guru</li>
        <li class="active">Profil</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Profil Guru PSDI</h3>
                <a href="{{route('guru/cetak_profil_pdf', $guru->nip)}}" class="btn btn-primary pull-right" target="_blank">CETAK PDF</a>
            </div>
<!-- /.box-header ALTER TABLE `guru` AUTO_INCREMENT = 0;-->
            <div class="box-body">
                <div class="col-md-4" style="padding-top:20px">
                    @if(is_null($guru->image))
                        <img src="{{ asset('images/default.png') }}" alt="Profile" class="img-thumbnail img-fluid" style="height: 100px">
                    @else
                        <img class="img-fluid img-thumbnail" style="height: 100px"  src="{{asset('images/file/'.$guru->image)}}" alt="Profile">
                    @endif
                </div> 
                <table class="table table-bordered table-striped">
                <thead>
                </thead>
                <tbody>

                <tr>
                    <th>NIP/ID</th>
                    <td>{{$guru->nip}}</td>
                </tr>
                
                <tr>
                <th>Nama</th>
                <td>{{$guru->nama}}</td>
                </tr>

                <tr>
                <th>Alamat</th>
                <td>{{$guru->alamat}}</td>
                </tr>
                
                <tr>
                <th>Tempat Lahir</th>
                <td>{{$guru->tempat_lahir}}</td>
                </tr>

                <tr>
                <th>Tanggal Lahir</th>
                <td>{{$guru->tgl_lahir}}</td>
                </tr>

                <tr>
                    <th>No Tlp</th>
                    <td>{{$guru->no_telp}}</td>   
                </tr>

                <tr>
                    <th>Tanggal Masuk PSDI</th>
                    <td>{{$guru->tgl_masuk}}</td>   
                </tr>
                <tr>
                    <th>Pendidikan Terakhir</th>
                    <td>{{$guru->pend_terakhir}}</td>   
                </tr>
                <tr>
                    <th>Jabatan</th>
                    <td>{{$guru->jabatan}}</td>   
                </tr>
                <tr>
                    <th>Boarding/PP</th>
                    <td>{{$guru->boarding}}</td>   
                </tr>
                <tr>
                    <th>Status Pernikahan</th>
                    <td>{{$guru->status_nikah}}</td>   
                </tr>
                <tr>
                    <th>Jumlah Keluarga Yang Dibawa</th>
                    <td>{{$guru->jumlah_kel}}</td>   
                </tr>

<!--                 <tr>
                    <th>Persentase Hadir</th>
                    <td>{{$hadirPersen}}%</td>
                </tr> -->

                </tbody>
                <tfoot>
                <tr>
                </tfoot>
                </table>
            </div>
<!-- /.box-body -->
<div class="button" style="margin-left:10px;margin-right:10px;padding-bottom:10px;">
            <a href="#" class="btn btn-success pull-right">Edit</a>
            <a href="{{url('/guru')}}" class="btn btn-primary">Kembali</a>
</div>
        </div>
    </div>
</section>
@endsection