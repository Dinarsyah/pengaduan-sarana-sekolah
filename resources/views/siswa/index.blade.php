<h1>Data Siswa</h1>

@foreach($data as $siswa)
    <p>{{ $siswa->nama }} - {{ $siswa->kelas }}</p>
@endforeach