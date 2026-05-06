@extends('layouts.app')

@section('content')

<h1>Dashboard</h1>

<p>Selamat datang di <b>Sistem Informasi Kwitansi & Surat</b></p>

<div style="display: flex; gap: 20px; margin-top:20px;">

    <div style="background:white; padding:20px; border-radius:10px; width:200px;">
        <h3>Kwitansi</h3>
        <p>Kelola data kwitansi</p>
        <a href="/kwitansi">Lihat</a>
    </div>

    <div style="background:white; padding:20px; border-radius:10px; width:200px;">
        <h3>Surat</h3>
        <p>Kelola data surat</p>
        <a href="/surat">Lihat</a>
    </div>

</div>

@endsection