<!DOCTYPE html>
<html>
<head>
    <title>Profil Guru PSDI</title>
</head>
<body>
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Data Guru PSDI</h4>
<!--         <h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5> -->
    </center>
                <div class="col-md-4" style="padding-top:20px">
                    @if(is_null($guru->image))
                        <img src="images/default.png" alt="Profile" class="img-thumbnail img-fluid" style="height: 100px">
                    @else
                        <img class="img-fluid img-thumbnail" style="height: 100px"  src="storage/files/guru/{{$guru->image}}" alt="Profile">
                    @endif
                </div> 
                <table class="table table-bordered table-striped">
                <thead>
                </thead>
                <tbody>

                <tr>
                    <th>NIP/ID</th>
                    <td>{{$guru->nip}}</td>
                </tr>
                
                <tr>
                <th>Nama</th>
                <td>{{$guru->nama}}</td>
                </tr>

                <tr>
                <th>Alamat</th>
                <td>{{$guru->alamat}}</td>
                </tr>
                
                <tr>
                <th>Tempat Lahir</th>
                <td>{{$guru->tempat_lahir}}</td>
                </tr>

                <tr>
                <th>Tanggal Lahir</th>
                <td>{{$guru->tgl_lahir}}</td>
                </tr>

                <tr>
                    <th>No Tlp</th>
                    <td>{{$guru->no_telp}}</td>   
                </tr>

                <tr>
                    <th>Tanggal Masuk PSDI</th>
                    <td>{{$guru->tgl_masuk}}</td>   
                </tr>
                <tr>
                    <th>Pendidikan Terakhir</th>
                    <td>{{$guru->pend_terakhir}}</td>   
                </tr>
                <tr>
                    <th>Jabatan</th>
                    <td>{{$guru->jabatan}}</td>   
                </tr>
                <tr>
                    <th>Boarding/PP</th>
                    <td>{{$guru->boarding}}</td>   
                </tr>
                <tr>
                    <th>Status Pernikahan</th>
                    <td>{{$guru->status_nikah}}</td>   
                </tr>
                <tr>
                    <th>Jumlah Keluarga Yang Dibawa</th>
                    <td>{{$guru->jumlah_kel}}</td>   
                </tr>
                </tbody>
                <tfoot>
                <tr>
                </tfoot>
                </table>

</body>
</html>