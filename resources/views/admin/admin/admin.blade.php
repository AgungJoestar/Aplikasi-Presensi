@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tabel
        <small>tabel admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Admin</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Admin PSDI</h3>
            </div>
<!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jenis Admin</th>
                    <th>Option</th>
                </tr>
                </thead>
                <tbody>
                <?php $nomer = 1; ?>

                @foreach ($user as $row)
                <tr>
                    <td>{{$nomer}}</td>
                    <td>{{ $row->name}}</td>
                    <td>{{ $row->email}}</td>
                    <td>{{$row->user_type}}</td>
                    <?php $nomer++; ?>
                    @if($row->user_type!='super_admin')
                    <td>
                    <a href="{{url('/admin/hapus/'.$row->id)}}" class="btn btn-sm btn-danger">Hapus</a>
                    <a href="{{url('/admin/edit/'.$row->id)}}" class="btn btn-sm btn-primary">Edit</a>
                    </td>
                    @endif
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jenis Admin</th>
                    <th>Option</th>
                </tr>
                </tfoot>
                </table>
            </div>
<!-- /.box-body -->
            <div class="box-footer">
                <a href="{{url('/admin/create')}}" class="btn btn-sm btn-success pull-right">
                    <i class="fa fa-plus"></i> Tambah
                </a>
            </div>
        </div>
    </div>
</section>
@endsection