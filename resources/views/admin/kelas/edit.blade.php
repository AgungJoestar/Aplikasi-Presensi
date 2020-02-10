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
        <li class="active">Edit</li>
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
                    <input name="kode_kelas" type="text" class="form-control" id="inputNIK" placeholder="Kode Kelas">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-2">Nama Kelas</label>

                  <div class="col-sm-10">
                    <input name="nama" type="text" class="form-control" id="inputNama" placeholder="Nama Kelas">
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