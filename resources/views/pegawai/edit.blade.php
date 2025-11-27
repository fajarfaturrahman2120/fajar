@extends('layouts.app')

@section('content')
<h3>Edit Pegawai</h3>

<form action="{{ route('pegawai.update', $pegawai) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="{{ $pegawai->nama }}" required>
    </div>
    <div class="mb-3">
        <label>NIP</label>
        <input type="text" name="nip" class="form-control" value="{{ $pegawai->nip }}" required>
    </div>
    <div class="mb-3">
        <label>Jabatan</label>
        <input type="text" name="jabatan" class="form-control" value="{{ $pegawai->jabatan }}" required>
    </div>
    <button class="btn btn-primary">Update</button>
</form>
@endsection

