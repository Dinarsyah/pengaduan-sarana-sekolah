<!DOCTYPE html>
<html>
<head>
    <title>Data Admin</title>
</head>
<body>

<h1>Data Admin</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
    </tr>

    @foreach($data as $index => $admin)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $admin->nama }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>