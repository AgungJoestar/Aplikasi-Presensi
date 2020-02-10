@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tambah
        <small>data kelas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Kelas</li>
        <li class="active">Create</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
     <!-- Horizontal Form -->
     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Kelas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="/kelas/create">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputNIK" class="col-sm-2">Kode Kelas</label>

                  <div class="col-sm-10">
                    <input name="kode_kelas" type="text" class="form-control" id="inputNIK" placeholder="Kode Kelas" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-2">Nama Kelas</label>

                  <div class="col-sm-10">
                    <input name="nama" type="text" class="form-control" id="inputNama" placeholder="Nama Kelas" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputJenisKelas" class="col-sm-2">Jenis Kelas</label>

                  <div class="col-sm-10">
                    <div class="col-sm-10">
                    <input name="jenis_kelas" type="radio" id="jenis_kelas" value="Reguler" checked>Regular<br>
                    <input name="jenis_kelas" type="radio" id="jenis_kelas" value="Pramubaligh">Pra Mubaligh<br>
                    <input name="jenis_kelas" type="radio" id="jenis_kelas" value="Pascamubaligh">Pasca Mubaligh<br>
                    <!--<input name="jenis_kelas" type="radio" id="jenis_kelas" value="Bimbel">Pengajian<br>-->
                    <input name="jenis_kelas" type="radio" id="jenis_kelas" value="Bimbel">Bimbel
                  </div>
                </div>
              </div>

             
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->

</div>
</section>
@endsection