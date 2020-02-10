@extends('admin.template.base')
@section('content')
@if(Session::has('flash_message_fail'))
    <div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span><em> {!! session('flash_message_fail') !!}</em></div>
@endif
<section class="content-header">
      <h1>
        Tambah
        <small>data siswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Siswa</li>
        <li class="active">Create</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
     <!-- Horizontal Form -->
     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Siswa</h3>
              <h6>* Wajib diisi</h6>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="/siswa/create" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputAngkatan" class="col-sm-2">Angkatan*</label>

                  <div class="col-sm-10">
                    <input name='angkatan' type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" minlength="4" class="form-control" id="inputNIK" placeholder="Angkatan" pattern="{4}" value="{{ old('angkatan') }}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNIK" class="col-sm-2">NISN*</label>

                  <div class="col-sm-10">
                    <input name='nisn' type="number" class="form-control" id="inputNIK" placeholder="No Induk Siswa Nasional" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" value="{{ old('nisn') }}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNIK" class="col-sm-2">NIS*</label>

                  <div class="col-sm-10">
                    <input name='nis' type="number" class="form-control" id="inputNIK" placeholder="No Induk Siswa" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="18" value="{{ old('nis') }}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-2">Nama*</label>

                  <div class="col-sm-10">
                    <input name='nama_siswa'type="text" class="form-control" id="inputNama" placeholder="Nama" value="{{ old('nama_siswa') }}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="image" class="col-sm-2">Foto</label>

                  <div class="col-sm-10">
                    <input name="image" type="file" id="image" value="{{ old('image') }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="jk_siswa" class="col-sm-2">Jenis Kelamin*</label>

                  <div class="col-sm-10">
                    <input name="jk_siswa" type="radio" id="jk" value="Laki-Laki" required>Laki-Laki
                    <input name="jk_siswa" type="radio" id="jk" value="Perempuan" required>Perempuan
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputAlamat" class="col-sm-2">Alamat*</label>

                  <div class="col-sm-10">
                    <textarea name="alamat_siswa" class="form-control" id="inputAlamat" cols="30" rows="4" value="{{ old('alamat_siswa') }}"  required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputTempatLahir" class="col-sm-2">Tempat Lahir*</label>

                  <div class="col-sm-10">
                    <input name='tmpt_lahir' type="text" onkeypress="return /[a-z]/i.test(event.key)" class="form-control" id="inputTempatLahir" placeholder="Tempat Lahir" autocomplete="off" value="{{ old('tmpt_lahir') }}" onpaste="return false" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputTanggalLahir" class="col-sm-2">Tanggal Lahir*</label>

                  <div class="col-sm-10">
                    <input name='tgl_lahir'type="date" class="form-control" id="inputTanggalLahir" value="{{ old('tgl_lahir') }}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputTlp" class="col-sm-2">No Telepon Orang Tua</label>

                  <div class="col-sm-10">
                    <input name='no_telp'type="text" class="form-control" id="inputTlp" value="{{ old('no_telp') }}">
                  </div>
                </div>
                                <div class="form-group">
                  <label for="inputEmail" class="col-sm-2">Email Orang Tua</label>

                  <div class="col-sm-10">
                    <input name='email'type="email" class="form-control" id="inputEmail3" placeholder="Email" value="{{ old('email') }}">
                  </div>
                </div>



                <!-- <div class="form-group">
                  <label for="inputOrtu" class="col-sm-2">Nama Orang Tua</label>

                  <div class="col-sm-10">
                    <input name='ortu'type="text" class="form-control" id="inputOrtu">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputemailOrtu" class="col-sm-2">Email Orang Tua</label>

                  <div class="col-sm-10">
                    <input name='emailortu'type="text" class="form-control" id="inputemailOrtu">
                  </div>
                </div>
              </div> -->

            <!--     <div class="form-group">
                  <label for="inputNamaortu" class="col-sm-2">Nama Orang Tua</label>

                  <div class="col-sm-10">
                    <input name='ortu'type="text" class="form-control" id="inputNamaortu">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmailortu" class="col-sm-2">Email Ortu</label>

                  <div class="col-sm-10">
                    <input name='emailortu'type="email" class="form-control" id="inputEmailOrtu">
                  </div>
                </div>
              </div> -->
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" onclick="history.back();" class="btn btn-danger">Back</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->

</div>
</section>
@endsection