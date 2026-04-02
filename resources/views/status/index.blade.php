<!DOCTYPE html>
<html>
<head>
    <title>Data Status</title>
</head>
<body>

<h1>Data Status</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
    </tr>

    @foreach($data as $index => $s)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $s->nama }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>