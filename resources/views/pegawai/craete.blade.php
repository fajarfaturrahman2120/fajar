@extends('layout.app')

@section('contant')

<h3>Tambah Pegawai</h3>

<form action="{{ route('pegawai.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>NIP</label>
        <input type="text" name="nip" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Jabatan</label>
        <input type="text" name="jabatan" class="form-control" required>
    </div>
    <button class="btn btn-success">Simpan</button>
</form>
@endsection


