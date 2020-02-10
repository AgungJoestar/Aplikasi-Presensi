<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa PSDI</title>
</head>
<body>
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Daftar Guru PSDI</h4>
<!--         <h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5> -->
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>NO</th>
                <th>NIP</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>No Tlp</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($guru as $row)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $row->nip}}</td>
                @if(!is_null($row->image))
                    <td>
                        <img src="storage/files/guru/{{$row->image}}" style="height: 50px">
                    </td>
                @else
                    <td>
                        <img src="images/default.png" style="height: 50px">
                    </td>
                @endif
                <td>{{ $row->nama}}</td>
                <td>{{ $row->alamat}}</td>
                <td>{{ $row->tempat_lahir}}</td>
                <td>{{ $row->tgl_lahir}}</td>
                <td>{{ $row->no_telp}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>