<!DOCTYPE html>
<html>
<head>
    <title>Data Kategori</title>
</head>
<body>

<h1>Data Kategori</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
    </tr>

    @foreach($data as $index => $k)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $k->nama }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>