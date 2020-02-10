<!DOCTYPE html>
<html>
<head>
    <title>Daftar Walikelas PSDI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                <th>NIP</th>
                <th>Nama Walikelas</th>
                <th>Nama Kelas</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($guru as $row)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $row->nip}}</td>
                <td>{{ $row->nama}}</td>
                <td>{{ $row->id_kelas}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>