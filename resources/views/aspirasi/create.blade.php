@extends('layouts.app')

@section('content')

<h3>Tambah Aspirasi</h3>

<form action="/aspirasi" method="POST">
    @csrf

    <div class="mb-3">
        <label>Siswa</label>
        <select name="siswa_id" class="form-control">
            @foreach($siswa as $s)
                <option value="{{ $s->siswa_id }}">{{ $s->nama }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Kategori</label>
        <select name="kategori_id" class="form-control">
            @foreach($kategori as $k)
                <option value="{{ $k->kategori_id }}">{{ $k->nama }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Status</label>
        <select name="status_id" class="form-control">
            @foreach($status as $st)
                <option value="{{ $st->status_id }}">{{ $st->nama }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control"></textarea>
    </div>

    <button class="btn btn-success">Simpan</button>
</form>

@endsection