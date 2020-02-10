@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tabel
        <small>Daftar Siswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kelas</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                @foreach ($kelas as $kelas)
                <h3 class="box-title" style="margin: 0px 0px 20px">Data Kelas {{ $kelas->nama}}</h3>
                <div class="row form-group">
                    <div class="col col-sm-2">
                        <p>Kode Kelas :</p>
                    </div>
                    <div>
                        <label>{{ $kelas->kode_kelas}}</label>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-sm-2">
                        <p>Jenis Kelas :</p>
                    </div>
                    <div>
                        <label>{{$kelas->jenis_kelas}}</label>
                    </div>
                </div>
                @endforeach
                <!-- <a href="{{url('/kelas/create')}}" class="btn btn-sm btn-success pull-right">
                    <i class="fa fa-plus"></i> Tambah
                </a> -->
            </div>
<!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>Nama</th>
                   <!--  <th>Wali Kelas</th>
                    <th>NO Ruangan</th> -->
                </tr>
                </thead>
                <tbody>
                <?php $nomer = 1; ?>

                @foreach ($siswa as $row)
                <tr>
                    <td>{{$nomer}}</td>
                    <td>{{ $row->nis}}</td>
                    <td>{{ $row->nama_siswa}}</td>
                    <?php $nomer++; ?>
                </tr>
                @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>Nama</th>
                   <!--  <th>Nama</th>
                    <th>Wali Kelas</th>
                    <th>NO Ruangan</th> -->
                </tr>
                </tfoot>
                </table>
                 <div class="box-footer">
                    <button type="button" onclick="history.back();" class="btn btn-danger">Back</button>
                </div>
            </div>
<!-- /.box-body -->
        </div>
    </div>
</section>
@endsection