<!DOCTYPE html>
<html>
<head>
    <title>Daftar Walikelas PSDI</title>
</head>
<body>
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Daftar Walikelas PSDI</h4>
<!--         <h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5> -->
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>NO</th>
                <th>Kode</th>
                <th>Nama Kelas</th>
                <th>Jenis Kelas</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($kelas as $row)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $row->kode_kelas}}</td>
                <td>{{ $row->nama}}</td>
                <td>{{ $row->jenis_kelas}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>