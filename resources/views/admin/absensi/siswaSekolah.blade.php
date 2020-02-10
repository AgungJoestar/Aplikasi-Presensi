@extends('admin.template.base')
@section('content')
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
@if(Session::has('flash_message_fail'))
    <div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span><em> {!! session('flash_message_fail') !!}</em></div>
@endif

<script type="text/javascript">
      window.onload = function()
    {
        var sekolahBefore = sessionStorage.getItem('searchSiswa');
        if(sekolahBefore != null){ 
            // alert(sekolahBefore);
            document.getElementById("searchSiswa").value = sekolahBefore; 
        }
        var userid = Number($('#searchSiswa').val().trim());
        if(userid > 0){
          fetchRecords(userid);
        }
    }

    window.onbeforeunload = function() {
        sessionStorage.setItem("searchSiswa", $('#searchSiswa').val());
    }
</script>
<section class="content-header">
      <h1>
        Tabel
        <small>Absensi Siswa Sekolah</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Absensi</li>
      </ol>
</section>
<section class="content">
  <form class="" method="get" action="/absensiswasekolah">
    @csrf
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">

                <form class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-sm-1">
                        <label for="kelas" class=" form-control-label">Kelas</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-building"></i>
                        </div>
                        <select name="id_kelas" id="searchSiswa" class="form-control">
                        @foreach ($kelas as $row)
                            <option name="id_kelas" value="{{$row->id}}" required>{{$row->kode_kelas}} - {{$row->nama}}</option>
                        @endforeach

                        <!-- <input type='text' id='search' name='search' placeholder='Enter id kelas'> -->
                        <!-- <input type='button' value='Pilih Kelas' id='but_search'> -->
                         <br/>
                         <!-- <input type='button' value='Tampilkan seluruh data' id='but_fetchall'> -->

                    </select>
                    </div>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
                </div>
              </form>
            </div>
          </div>

          <div class="box">
            <div class="box-header">
 <form class="" method="post" action="/absensiswasekolah">
    @csrf
                <input type="hidden" name="id_kelas" value="{{$id_kelas}}">
                <div class="row form-group">
                    <div class="col col-sm-1">
                        <label for="tanggal" class="form-control-label">Tanggal</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" class="form-control" style="width:17%" name="tgl_absen" required>
                    </div>
                </div>
<!-- 
                <div class="row form-group">
                    <div class="col col-sm-1">
                        <label for="sesi" class=" form-control-label">Sesi</label>
                    </div>
                    <div class="input-group">
                        <select class="form-control" name="pertemuan">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </div>       -->
                        <input type="hidden" name="pertemuan" value="1">
<!-- /.box-header -->
            <div class="box-body">
                <table id="example3" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <!-- <th>Pilih</th> -->
                    <th>Hadir</th>
                    <th>Sakit</th>
                    <th>Alfa</th>
                    <th>Izin</th>
                    <th>Keterangan</th>
                </tr>
                </thead>
                
                <tbody>
                <?php $nomer = 1; ?>
                <?php $getid = array(); ?>
                @if(!is_null($id_kelas))
                @foreach ($siswa as $row)
                <tr>
                <?php $getid[$nomer] = $row->nis; ?> 
                <div id="getidup"></div>
                    <td>{{$nomer}}</td>
                    <td>{{$row->nis}}</td>
                    <td>{{$row->nama_siswa}}</td>
                    <td>{{$row->jk_siswa}}</td>
                    <input type="hidden" name="nis[]" value="{{$getid[$nomer]}}">
                    <!-- <td><input type = "checkbox" name = "nis[]" value = "{{$getid[$nomer]}}"/></td> -->
                    <td><input type="radio" name="absen{{$row->nis}}" value="hadir"></td>
                    <td><input type="radio" name="absen{{$row->nis}}" value="sakit"></td>
                    <td><input type="radio" name="absen{{$row->nis}}" value="alfa"></td>
                    <td><input type="radio" name="absen{{$row->nis}}" value="izin"></td>
                    <td><input name="keterangan{{$row->nis}}" type="text" class="form-control" id="keterangan" placeholder="Keterangan"></td>
                <?php $nomer++; ?>
                </tr>
                @endforeach
                @endif
                </tbody>

                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Hadir</th>
                    <th>Sakit</th>
                    <th>Alfa</th>
                    <th>Izin</th>
                    <th>Keterangan</th>
                </tr>
                </tfoot>

                </table>
                <br>
 <!--                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Hadir</th>
                        <th>Sakit</th>
                        <th>Alfa</th>
                        <th>Izin</th>
                        <th>Pilih</th>
                    </tr>
                    <tr>
                        <td><input type="radio" name="absen" value="hadir" required></td>
                        <td><input type="radio" name="absen" value="sakit"></td>
                        <td><input type="radio" name="absen" value="alfa"></td>
                        <td><input type="radio" name="absen" value="izin"></td>
                        <td><input name="keterangan" type="text" class="form-control" id="keterangan" placeholder="Keterangan"></td>
                    </tr>
                </table> -->
            <div class="box-footer">
                <td><button type="submit"class="btn btn-success btn-sm pull-right">Submit</button></td>
            </div>
<!-- /.box-body -->
        </div>
    </div>
</form>
</section>
@endsection