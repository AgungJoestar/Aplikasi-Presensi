<!DOCTYPE html>
<html>
<head>
    <title>Presensi Siswa</title>
</head>
<body onload="window.print()">
    <style type="text/css">
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table tr td,
        table tr th{
            font-size: 12pt;
            border: 1px solid black;
        }
        th {
            text-align: center;
            height: 50px;
        }
        td {
            padding: 5px;
            height: 10px;
        }
        hr { 
          display: block;
          margin-top: 0.5em;
          margin-bottom: 0.5em;
          margin-left: auto;
          margin-right: auto;
          border-style: inset;
          border-width: 1px;
        } 
    </style>
    <center>
        <h1>Presensi Bimbel Siswa</h1>
        <h2>Pondok Schooling Daarul Ilmi</h2>
        <hr>
<h3>Tanggal: {{$tgl_lapor}}</h3>
        @foreach ($siswa as $row)
        @if($row->kode_kelas == $id_kelas_lapor)
            <h3>Kelas: {{$row->kode_kelas}}—{{$row->nama}}</h3>
            @break
        @endif
        @endforeach

<!--         <h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5> -->
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>NO</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Absen</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($siswa as $row)
            @if($row->tgl_absen == $tgl_lapor)
                @if($row->kode_kelas == $id_kelas_lapor)
            <tr>
                <td style="width: 15px">{{ $i++ }}</td>
                <td>{{ $row->nis}}</td>
                <td>{{ $row->nama_siswa}}</td>
                <td style="width: 15px">{{ $row->absen}}</td>
                <td>{{ $row->keterangan}}</td>
            </tr>
            @endif
            @endif
            @endforeach
        </tbody>
    </table>

</body>
</html>