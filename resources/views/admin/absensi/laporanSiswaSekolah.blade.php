@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tabel
        <small>Absensi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Absensi</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
    <form class="" method="get" action="/absensiswasekolah/LaporanSiswaSekolah">
    @csrf
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
                    <div class="col col-sm-1">
                        <label for="kelas" class=" form-control-label">Kelas</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-building"></i>
                        </div>
                        <select name="id_kelas" id="searchSiswa" class="form-control">
                        @foreach ($kelas as $row)
                            <option name="id_kelas" value="{{$row->kode_kelas}}" required>{{$row->kode_kelas}} - {{$row->nama}}</option>
                        @endforeach

                        <!-- <input type='text' id='search' name='search' placeholder='Enter id kelas'> -->
                        <!-- <input type='button' value='Pilih Kelas' id='but_search'> -->
                         <br/>
                         <!-- <input type='button' value='Tampilkan seluruh data' id='but_fetchall'> -->

                    </select>
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
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Status Absen</th>
                    <th>Keterangan</th>
                </tr>
                </thead>
                <tbody>
                <?php $nomer = 1; ?>
                @foreach ($siswaSekolah as $pasca)
                @if($pasca->tgl_absen == $tgl_lapor)
                    @if($pasca->kode_kelas == $id_kelas)
                <tr>
                    <td>{{$nomer}}</td>
                    <td>{{ $pasca->nis}}</td>
                    <td>{{ $pasca->nama_siswa}}</td>
                    <td>{{ $pasca->absen}}</td>
                    <td>{{ $pasca->keterangan}}</td>
                <?php $nomer++; ?>
                </tr>      
                @endif
                @endif
                @endforeach
                </tfoot>

                </table>
            </div>
<!-- /.box-body -->
            <div class="box-footer">
                <a href="LaporanSiswaSekolah/cetak_pdf/{{$tgl_lapor}}/{{$id_kelas}}" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-print"></i> CETAK PDF</a>
            </div>
        </div>
    </div>
</section>
@endsection