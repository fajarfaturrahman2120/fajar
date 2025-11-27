@extends('layout.app')

@sectio('content')
<h3>Daftar Pegawai</h3>
<a href="{{route('pegawai.create)}}" class="btn btn-primary mb-3">Tambah Pegawai</a>

@if (session('success'))
<div class="alert alert-succes">{{session('succes')}}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIP</th>
            <th>Jabatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $pegawai)
        <tr>
            <td>{{ $pegawai->nama }}</td>
            <td>{{ $pegawai->nip }}</td>
            <td>{{ $pegawai->jabatan }}</td>
            <td>
                <a href="{{ route('pegawai.edit', $pegawai) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('pegawai.destroy', $pegawai) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin?')" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection