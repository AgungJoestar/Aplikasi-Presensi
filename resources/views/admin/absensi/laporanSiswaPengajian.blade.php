@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tabel
        <small>Laporan Absensi Siswa Pengajian</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Laporan</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="row form-group">
                    <div class="col col-sm-1">
                        <label for="siswa" class=" form-control-label">Siswa</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-users"></i>
                        </div>
                        <select class="form-control" style="width:17%">
                            <option>Pra MT</option>
                            <option>Paska MT</option>
                            <option>MTI</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-sm-1">
                        <label for="kelas" class=" form-control-label">Kelas</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-building"></i>
                        </div>
                        <select class="form-control" style="width:17%">
                            <option>Lambatan</option>
                            <option>Cepatan</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-sm-1">
                        <label for="bulan" class=" form-control-label">Bulan</label>
                    </div>
                    <div class="input-group">
                        <select class="form-control">
                            <option>Januari</option>
                            <option>Februari</option>
                            <option>Maret</option>
                            <option>April</option>
                            <option>Mei</option>
                            <option>Juni</option>
                            <option>Juli</option>
                            <option>Agustus</option>
                            <option>September</option>
                            <option>Oktober</option>
                            <option>November</option>
                            <option>Desember</option>
                        </select>
                    </div>
                </div>
            </div>
<!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <td rowspan="2" align=center>NO</td>
                    <td rowspan="2" align=center>NIS</td>
                    <td rowspan="2" align=center>Nama</td>
                    <td colspan="6">Senin: </td>
                    <td colspan="6">Selasa: </td>
                    <td colspan="6">Rabu: </td>
                    <td colspan="3">Kamis: </td>
                    <td colspan="3">Jum'at: </td>
                    <td colspan="3">Sabtu: </td>
                </tr>
                <tr>
                    <td align=center>K1</td>
                    <td align=center>K2</td>
                    <td align=center>K3</td>
                    <td align=center>K4</td>
                    <td align=center>K5</td>
                    <td align=center>K6</td>
                    <td align=center>K1</td>
                    <td align=center>K2</td>
                    <td align=center>K3</td>
                    <td align=center>K4</td>
                    <td align=center>K5</td>
                    <td align=center>K6</td>
                    <td align=center>K1</td>
                    <td align=center>K2</td>
                    <td align=center>K3</td>
                    <td align=center>K4</td>
                    <td align=center>K5</td>
                    <td align=center>K6</td>
                    <td align=center>K1</td>
                    <td align=center>K5</td>
                    <td align=center>K6</td>
                    <td align=center>K1</td>
                    <td align=center>K5</td>
                    <td align=center>K6</td>
                    <td align=center>K1</td>
                    <td align=center>K5</td>
                    <td align=center>K6</td>
                </tr>
                </thead>
                <tbody> 
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                
                </tbody>
                </table>
            </div>
<!-- /.box-body -->
        </div>
    </div>
</section>
@endsection