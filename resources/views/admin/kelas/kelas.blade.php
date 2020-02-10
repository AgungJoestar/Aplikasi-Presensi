@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tabel
        <small>tabel kelas</small>
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
                <h3 class="box-title">Data Kelas PSDI</h3>
            </div>
<!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis Kelas</th>
                    <th>Tindakan</th>
                   <!--  <th>Wali Kelas</th>
                    <th>NO Ruangan</th> -->
                </tr>
                </thead>
                <tbody>
                <?php $nomer = 1; ?>

                @foreach ($kelas as $row)
                <tr>
                    <td>{{$nomer}}</td>
                    <td>{{ $row->kode_kelas}}</td>
                    <td>{{ $row->nama}}</td>
                    @if($row->jenis_kelas == 'Pengajian')
                        <td>{{$row->jenis_kelas}} - {{$row->prapasca}}</td>
                    @else
                        <td>{{$row->jenis_kelas}}</td>
                    @endif
                    <td>
                        <a href="{{route('showKelas', $row->id)}}" class="btn btn-sm btn-primary">Daftar Siswa</a>
                        <a href="{{route('showAnggota', $row->id)}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Anggota Kelas</a>
                        <a href="{{route('hapusKelas',$row->id)}}" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                    <?php $nomer++; ?>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis Kelas</th>
                    <th>Tindakan</th>
                   <!--  <th>Nama</th>
                    <th>Wali Kelas</th>
                    <th>NO Ruangan</th> -->
                </tr>
                </tfoot>
                </table>
               
            </div>
<!-- /.box-body -->
            <div class="box-footer">
                <a href="{{url('/kelas/create')}}" class="btn btn-sm btn-success pull-right">
                    <i class="fa fa-plus"></i> Tambah
                </a>
                <a href="/kelas/cetak_pdf" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-print"></i> CETAK PDF</a>
            </div>
        </div>
    </div>
</section>
@endsection