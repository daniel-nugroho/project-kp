@extends('layouts.app')

@section('content')

<h2>Tambah Kwitansi</h2>

<form method="POST" action="/kwitansi">
    @csrf

    <label>Tanggal</label><br>
    <input type="date" name="tanggal" required><br><br>

    <label>Jumlah</label><br>
    <input type="number" name="jumlah" required><br><br>

    <button type="submit">Simpan</button>
</form>

@endsection