@extends('admin.template.base')

@section('content')
<section class="content-header">
    <?php foreach ($guru as $key): ?>
      <h1>Profil  {{$key->nama}}</h1>
      <p>{{$key->alamat}}</p>
    <?php endforeach; ?>
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
<section class="content-header">
      <h1>
        Lihat
        <small>data </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""></li>
        <li class="active">Profil</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Profil Guru PSDI</h3>
            </div>
<!-- /.box-header ALTER TABLE `siswa` AUTO_INCREMENT = 0;-->

        <form action="/guru/update/{{$key->nip}}" method="post"  enctype="multipart/form-data">
            <div class="box-body">
                <div class="col-md-4" style="padding-top:20px">
                   @if(is_null($key->image))
                        <img src="{{ asset('images/default.png') }}" alt="Profile" class="img-thumbnail img-fluid" style="height: 100px">
                    @else
                        <img class="img-fluid img-thumbnail" style="height: 100px"  src="{{asset('images/file/'.$key->image)}}" alt="Profile">
                    @endif  
                </div> 

                <table class="table table-bordered table-striped">
                {{ csrf_field() }}
                <thead>
                </thead>
                <tbody>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="nip">NIP/ID*</label></th>
                        <td><input type="text" name="nip" class="form-control" value="{{$key->nip}}" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="18"></td>
                    </div>
                </tr> 
                
                <tr>
                <div class="form-group">
                  <th><label for="image" class="col-sm-2">Foto</label></th>

                <td>x<div class="col-sm-10">
                    <input name="image" type="file" id="image">
                  </div></th>
                </div>
                </tr>
                
                
                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="nama">Nama*</label></th>
                        <td><input type="text" name="nama" class="form-control" value="{{$key->nama}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="email">Email</label></th>
                        <td><input type="text" name="email" class="form-control" value="{{$key->email}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="alamat">Alamat*</label></th>
                        <td><input type="text" name="alamat" class="form-control" value="{{$key->alamat}}"></td>
                    </div>
                </tr>


                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="tempat_lahir">Tempat Lahir*</label></th>
                        <td><input type="text" name="tempat_lahir" class="form-control" value="{{$key->tempat_lahir}}" onkeypress="return /[a-z]/i.test(event.key)" autocomplete="off" onpaste="return false"></td>
                    </div>
                </tr>
               
                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="tgl_lahir">Tanggal Lahir*</label></th>
                        <td><input type="date" name="tgl_lahir" class="form-control" value="{{$key->tgl_lahir}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="no_telp">No Telepon</label></th>
                        <td><input type="number" name="no_telp" class="form-control" value="{{$key->no_telp}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="tgl_masuk">Tanggal Masuk</label></th>
                        <td><input type="date" name="tgl_masuk" class="form-control" value="{{$key->tgl_masuk}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="pend_terakhir">Pendidikan Terakhir</label></th>
                        <td><input type="text" name="pend_terakhir" class="form-control" value="{{$key->pend_terakhir}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="jabatan">Jabatan</label></th>
                        <td><input type="text" name="jabatan" class="form-control" value="{{$key->jabatan}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="boarding">Boarding/PP</label></th>
                        <td><input type="text" name="boarding" class="form-control" value="{{$key->boarding}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="status_nikah">Status Menikah</label></th>
                        <td>
                        <select class="form-control" name="status_nikah" >
                        <option value="{{$key->status_nikah}}">({{$key->status_nikah}})</option>
                        <option value="Sudah Menikah">Sudah Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                        </select></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="jumlah_kel">Jumlah Keluarga</label></th>
                        <td><input type="text" name="jumlah_kel" class="form-control" value="{{$key->jumlah_kel}}"></td>
                    </div>
                </tr>

                </tbody>
                <tfoot>
                <tr>
                </tfoot>
                </table>
            </div>
<!-- /.box-body -->
            <div class="button" style="margin-left:10px;margin-right:10px;padding-bottom:10px;">
            <a href="{{url('/guru')}}" class="btn btn-danger">Kembali</a>
            <input type="submit" value="Simpan Data"> 
            </div>
            </form>


            
        </div>
    </div>
</section>
@endsection