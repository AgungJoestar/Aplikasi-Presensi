@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tambah
        <small>data wali kelas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Wali Kelas</li>
        <li class="active">Edit</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
     <!-- Horizontal Form -->
     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Wali Kelas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputNIP" class="col-sm-2">NIP</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNIP" placeholder="No Induk Pegawai">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-2">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama" placeholder="Nama">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAlamat" class="col-sm-2">Alamat</label>

                  <div class="col-sm-10">
                    <textarea name="alamat" class="form-control" id="inputAlamat" cols="30" rows="4"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputTempatLahir" class="col-sm-2">Tempat Lahir</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputTempatLahir" placeholder="Tempat Lahir">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputTanggalLahir" class="col-sm-2">Tanggal Lahir</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputTanggalLahir">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputTlp" class="col-sm-2">No Tlp</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputTlp">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->

</div>
</section>
@endsection