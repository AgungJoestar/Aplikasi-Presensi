@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tambah
        <small>data admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Admin</li>
        <li class="active">Edit</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
     <!-- Horizontal Form -->
     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="/admin/update" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputNama" class="col-sm-2">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputNama" placeholder="Nama">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2">Email</label>

                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword" class="col-sm-2">Password</label>

                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password"></input>
                  </div>
                </div>
              <div class="form-group">
                        <label for="user_type" class="col-sm-2">Peran User</label>
                        <div class="col-sm-10">
                        <select class="form-control" name="user_type" id="user_type">
                        <!--<option value="admin">Admin</option>-->
                        <option value="super_admin">Admin</option>
                        <option value="reguler">Reguler</option>
                        <option value="Bimbel">Bimbel</option>
                        <option value="pra_mubaligh">Pra Mubaligh</option>
                        <option value="pasca_mubaligh">Pasca Mubaligh</option>
                        </select>
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