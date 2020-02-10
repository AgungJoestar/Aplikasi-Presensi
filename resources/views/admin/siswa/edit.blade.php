@extends('admin.template.base')

@section('content')
<section class="content-header">
    <?php foreach ($useredit as $key): ?>
      <h1>Profil Siswa {{$key->nama_siswa}}</h1>
      <p>{{$key->alamat_siswa}}</p>
    <?php endforeach; ?>
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
<section class="content-header">
      <h1>
        Lihat
        <small>data siswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Siswa</li>
        <li class="active">Profil</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Profil Siswa PSDI</h3>
            </div>
<!-- /.box-header ALTER TABLE `siswa` AUTO_INCREMENT = 0;-->

        <form action="/siswa/update/{{$key->nis}}" method="post" enctype="multipart/form-data">
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
                        <th><label for="angkatan">Angkatan*</label></th>
                        <td><input type="number" name="angkatan" class="form-control" value="{{$key->angkatan}}" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" minlength="4" required></td>
                    </div>
                </tr> 

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="nisn">NISN*</label></th>
                        <td><input type="number" name="nisn" class="form-control" value="{{$key->nisn}}"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required></td>
                    </div>
                </tr> 

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="nis">NIS*</label></th>
                        <td><input type="text" name="nis" class="form-control" value="{{$key->nis}}" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="18" value="{{ old('nis') }}" required></td>
                    </div>
                </tr>
                
                <tr>
                <div class="form-group">
                  <th><label for="image">Foto</label></th>

                <td>x<div class="col-sm-10">
                    <input name="image" type="file" id="image">
                  </div></th>
                </div>
                </tr>
                
                
                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="nama_siswa">Nama*</label></th>
                        <td><input type="text" name="nama_siswa" class="form-control" value="{{$key->nama_siswa}}"></td>
                    </div>
                </tr>

                 <tr>
                    <div class="form-group has-feedback">
                        <th><label for="jk_siswa">Jenis Kelamin*</label></th>
                        <td>
                        <select class="form-control" name="jk_siswa" >
                        <option value="{{$key->jk_siswa}}">({{$key->jk_siswa}})</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                        </select></td>
                    </div>
                </tr>

<!-- 
                <tr>
                    <div class="form-group">
                        <th><label for="id_kelas">Kelas</label></th>
                        <div class="col-sm-10">
                        <td><select class="form-control" name="id_kelas" ">
                        <option value="{{$key->id_kelas}}">({{$key->kode_kelas}} - {{$key->nama}})</option>
                        @foreach ($kelas as $row)
                        <option value="{{$row->id}}">{{$row->kode_kelas}} - {{$row->nama}}</option>
                        @endforeach
                        </select></td>
                        </div>
                     </div>
                </tr>
 -->



                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="alamat">Alamat*</label></th>
                        <td><input type="text" name="alamat_siswa" class="form-control" value="{{$key->alamat_siswa}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="tmpt_lahir">Tempat Lahir*</label></th>
                        <td><input type="text" name="tmpt_lahir" class="form-control" value="{{$key->tmpt_lahir}}" onkeypress="return /[a-z]/i.test(event.key)" autocomplete="off" onpaste="return false" ></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="tgl_lahir">Tanggal Lahir*</label></th>
                        <td><input type="text" name="tgl_lahir" class="form-control" value="{{$key->tgl_lahir}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="no_telp">No Telepon Orang Tua</label></th>
                        <td><input type="text" name="no_telp" class="form-control" value="{{$key->no_telp}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="email">Email Orang Tua</label></th>
                        <td><input type="text" name="email" class="form-control" value="{{$key->email}}"></td>
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
            <a href="{{url('/siswa')}}" class="btn btn-danger">Kembali</a>
            <input type="submit" value="Simpan Data"> 
            </div>
            </form>


            
        </div>
    </div>
</section>
@endsection