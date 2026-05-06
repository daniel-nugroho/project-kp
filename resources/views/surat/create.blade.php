@extends('layouts.app')

@section('content')
<h3>Tambah Surat</h3>

<form action="/surat" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nomor</label>
        <input type="text" name="nomor_surat" class="form-control">
    </div>

    <div class="mb-3">
        <label>Tanggal</label>
        <input type="date" name="tanggal" class="form-control">
    </div>

    <button class="btn btn-success">Simpan</button>
</form>
@endsection