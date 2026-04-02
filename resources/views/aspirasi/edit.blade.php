<h1>Edit Aspirasi</h1>

<form action="/aspirasi/{{ $aspirasi->aspirasi_id }}" method="POST">
    @csrf
    @method('PUT')

    <label>Siswa:</label>
    <select name="siswa_id">
        @foreach($siswa as $s)
            <option value="{{ $s->siswa_id }}" 
                {{ $aspirasi->siswa_id == $s->siswa_id ? 'selected' : '' }}>
                {{ $s->nama }}
            </option>
        @endforeach
    </select>

    <label>Kategori:</label>
    <select name="kategori_id">
        @foreach($kategori as $k)
            <option value="{{ $k->kategori_id }}"
                {{ $aspirasi->kategori_id == $k->kategori_id ? 'selected' : '' }}>
                {{ $k->nama }}
            </option>
        @endforeach
    </select>

    <label>Status:</label>
    <select name="status_id">
        @foreach($status as $st)
            <option value="{{ $st->status_id }}"
                {{ $aspirasi->status_id == $st->status_id ? 'selected' : '' }}>
                {{ $st->nama }}
            </option>
        @endforeach
    </select>

    <label>Deskripsi:</label>
    <textarea name="deskripsi">{{ $aspirasi->deskripsi }}</textarea>

    <button type="submit">Update</button>
</form>