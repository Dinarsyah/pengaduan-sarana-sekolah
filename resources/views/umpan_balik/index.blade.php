<!DOCTYPE html>
<html>
<head>
    <title>Umpan Balik</title>
</head>
<body>

<h1>Data Umpan Balik</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama Siswa</th>
        <th>Aspirasi</th>
        <th>Admin</th>
        <th>Komentar</th>
    </tr>

    @foreach($data as $index => $u)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $u->aspirasi->siswa->nama }}</td>
        <td>{{ $u->aspirasi->deskripsi }}</td>
        <td>{{ $u->admin->nama }}</td>
        <td>{{ $u->komentar }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>