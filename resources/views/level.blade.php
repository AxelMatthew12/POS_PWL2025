<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data level Pengguna</title>
</head>
<body>
    <h1>Data level Pengguna </h1>
    <table border="1" cellpading="2" cellspasing="0">
        <tr>
            <th>ID</th>
            <th>Kode level</th>
            <th>Nama Level</th>
        </tr>
        @foreach ($data as $d )
            <tr>
                <td>{{$d->level_id}}</td>
                <td>{{$d->level_kode}}</td>
                <td>{{$d->level_name}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>