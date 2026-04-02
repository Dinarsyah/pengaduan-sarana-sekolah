@extends('layouts.app')

@section('content')

<h3 class="mb-3">Data Aspirasi</h3>

<a href="/aspirasi/create" class="btn btn-primary mb-3">+ Tambah Aspirasi</a>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Siswa</th>
            <th>Kategori</th>
            <th>Status</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
    @foreach($data as $a)
    <tr>
        <td>{{ $a->siswa->nama }}</td>
        <td>{{ $a->kategori->nama }}</td>
        <td>
            <span class="badge bg-success">{{ $a->status->nama }}</span>
        </td>
        <td>{{ $a->deskripsi }}</td>
        <td>
            <a href="/aspirasi/{{ $a->aspirasi_id }}/edit" class="btn btn-warning btn-sm">Edit</a>

            <form action="/aspirasi/{{ $a->aspirasi_id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

@endsection