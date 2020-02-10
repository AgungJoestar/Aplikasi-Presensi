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
        <li class="">Staf</li>
        <li class="active">Profil</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Profil Staf PSDI</h3>
                <a href="{{route('staf/cetak_profil_pdf', $staf->nip_staf)}}" class="btn btn-primary pull-right" target="_blank">CETAK PDF</a>
            </div>
<!-- /.box-header ALTER TABLE `guru` AUTO_INCREMENT = 0;-->
            <div class="box-body">
                <div class="col-md-4" style="padding-top:20px">
                    @if(is_null($staf->image))
                        <img src="{{ asset('images/default.png') }}" alt="Profile" class="img-thumbnail img-fluid" style="height: 100px">
                    @else
                       <img class="img-fluid img-thumbnail" style="height: 100px"  src="{{asset('images/file/'.$staf->image)}}" alt="Profile">
                    @endif
                </div> 
                <table class="table table-bordered table-striped">
                <thead>
                </thead>
                <tbody>

                <tr>
                    <th>NIP</th>
                    <td>{{$staf->nip_staf}}</td>
                </tr>
                
                <tr>
                <th>Nama</th>
                <td>{{$staf->nama_staf}}</td>
                </tr>

                <tr>
                <th>Alamat</th>
                <td>{{$staf->alamat_staf}}</td>
                </tr>
                
                <tr>
                <th>Tempat Lahir</th>
                <td>{{$staf->tempat_lahir_staf}}</td>
                </tr>

                <tr>
                <th>Tanggal Lahir</th>
                <td>{{$staf->tgl_lahir_staf}}</td>
                </tr>

                <tr>
                    <th>No Tlp</th>
                    <td>{{$staf->no_telp_staf}}</td>   
                </tr>

                <tr>
                    <th>Tanggal Masuk PSDI</th>
                    <td>{{$staf->tgl_masuk_staf}}</td>   
                </tr>
                <tr>
                    <th>Pendidikan Terakhir</th>
                    <td>{{$staf->pend_terakhir_staf}}</td>   
                </tr>
                <tr>
                    <th>Jabatan</th>
                    <td>{{$staf->jabatan_staf}}</td>   
                </tr>
                <tr>
                    <th>Boarding/PP</th>
                    <td>{{$staf->boarding_staf}}</td>   
                </tr>
                <tr>
                    <th>Status Pernikahan</th>
                    <td>{{$staf->status_nikah_staf}}</td>   
                </tr>
                <tr>
                    <th>Jumlah Keluarga Yang Dibawa</th>
                    <td>{{$staf->jumlah_kel_staf}}</td>   
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
            <a href="{{url('/staf')}}" class="btn btn-primary">Kembali</a>
</div>
        </div>
    </div>
</section>
@endsection