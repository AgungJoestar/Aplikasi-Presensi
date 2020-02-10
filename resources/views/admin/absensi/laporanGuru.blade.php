@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tabel
        <small>Absensi Guru</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Absensi</li>
      </ol>
</section>
<section class="content">
    <form class="" method="get" action="/absenguru/laporanAbsensiGuru">
    @csrf
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="col col-sm-1">
                        <label>Tanggal</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" class="form-control" style="width:17%" name="tgl_lapor" required>
                    </div>
                    <button type="submit" class="btn btn-info pull-right">Submit</button>
                <!-- /.input group -->
            </div>
            </form>
<!-- /.box-header -->
            <div class="box-body">
                <div>Tanggal : {{$tgl_lapor}}</div>
                <br>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>NIP/ID</th>
                    <th>Nama</th>
                    <th>Status Absen</th>
                    <th>Keterangan</th>
                </tr>
                </thead>
                <tbody>
                <?php $nomer = 1; ?>
                @foreach ($users as $guru)
                @if($guru->tgl_absen == $tgl_lapor)
                <tr>
                    <td>{{$nomer}}</td>
                    <td>{{ $guru->nip}}</td>
                    <td>{{ $guru->nama}}</td>
                    <td>{{ $guru->absen}}</td>
                    <td>{{ $guru->keterangan}}</td>
            
                <?php $nomer++; ?>
                </tr>
                @endif
                @endforeach
                </tfoot>

                </table>
            </div>
<!-- /.box-body -->
            <div class="box-footer">
                <a href="laporanAbsensiGuru/cetak_pdf/{{$tgl_lapor}}" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-print"></i> CETAK PDF</a>
            </div>
        </div>
    </div>

</section>
@endsection