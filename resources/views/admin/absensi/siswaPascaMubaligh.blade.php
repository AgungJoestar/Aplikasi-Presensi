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
        var pascamubalighBefore = sessionStorage.getItem('searchPascamubaligh');
        if(pascamubalighBefore != null){ 
            // alert(pengajianBefore);
            document.getElementById("searchPascamubaligh").value = pascamubalighBefore; 
        }
        var userid = Number($('#searchPascamubaligh').val().trim());
        if(userid > 0){
          fetchRecords(userid);
        }
    }

    window.onbeforeunload = function() {
        sessionStorage.setItem("searchPascamubaligh", $('#searchPascamubaligh').val());
    }
</script>
<section class="content-header">
      <h1>
        Tabel
        <small>Absensi Siswa Pasca Mubaligh</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Absensi</li>
      </ol>
</section>
<section class="content">
 <form class="" method="post" action="/absenpascamubaligh">
    @csrf
    <div class="col-xs-12">

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

                <form class="form-horizontal">
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

<!--                 <div class="row form-group">
                    <div class="col col-sm-1">
                        <label for="sesi" class=" form-control-label">Sesi</label>
                    </div>
                    <div class="input-group">
                        <select class="form-control" name="pertemuan">
                            <option value="K1">K1</option>
                            <option value="K2">K3</option>
                            <option value="K3">K2</option>
                            <option value="K4">K4</option>
                            <option value="K5">K5</option>
                            <option value="K6">K6</option>
                        </select>
                    </div>
                </div>   -->
                 <input type="hidden" name="pertemuan" value="1">    
<!-- /.box-header -->
            <div class="box-body">
                <table id="example3" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
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


                        <!-- <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>

     <script type='text/javascript'>
     $(document).ready(function(){

       // Fetch all records
       $('#but_fetchall').click(function(){
     fetchRecords(0);
       });

      $('#searchPascamubaligh').on('change', function(){
          var userid = Number($('#searchPascamubaligh').val().trim());
                if(userid > 0){
                  fetchRecords(userid);
                }
       });

       // Search by userid
       $('#but_search').click(function(){
          var userid = Number($('#searchPascamubaligh').val().trim());
                
      if(userid > 0){
        fetchRecords(userid);
      }

       });

     });

     function fetchRecords(id){
       $.ajax({
         url: 'absenpascamubaligh/getUsers/'+id,
         type: 'get',
         dataType: 'json',
         success: function(response){

           var len = 0;
           $('#tabelabsen tbody').empty(); // Empty <tbody>
           if(response['data'] != null){
             len = response['data'].length;
           }

           var getid = [];
           if(len > 0){
             for(var i=0; i<len; i++){
               var nis = response['data'][i].nis;
               var nama_siswa = response['data'][i].nama_siswa;
               var email = response['data'][i].email;
               var jk_siswa = response['data'][i].jk_siswa;
               var id_kelas = response['data'][i].id_kelas;
               getid[i] = response['data'][i].nis;
               
               var tr_str = "<tr>" +
                   "<td>" + (i+1) + "</td>" +
                   "<td>" + nis + "</td>" +
                   "<td>" + nama_siswa + "</td>" +
                   "<td>" + jk_siswa + "</td>" +
                   "<td><input type = 'checkbox' name = 'nis[]' value = '"+getid[i]+"'/></td>"+
               "</tr>";

               $("#tabelabsen tbody").append(tr_str);
             }
           }else if(response['data'] != null){
              // var tr_str = "<tr>" +
              //     "<td>1</td>" +
              //     "<td>" + response['data'].nis + "</td>" +
              //     "<td>" + response['data'].nama_siswa + "</td>" + 
              //     "<td>" + response['data'].jk + "</td>" +
              //       "<td><input type = 'checkbox' name = 'nis[]' value = '"+getid[i]+"'/></td>"+
              // "</tr>";

                var tr_str = "<tr>" +
                  "<td align='center' colspan='4'>No record found.</td>" +
              "</tr>";

              $("#tabelabsen tbody").append(tr_str);
           }else{
              var tr_str = "<tr>" +
                  "<td align='center' colspan='4'>No record found.</td>" +
              "</tr>";

              $("#tabelabsen tbody").append(tr_str);
           }

         }
       });
     }
     </script> -->

                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
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
               <!--  <table class="table table-bordered table-striped">
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