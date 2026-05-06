@extends('layouts.app')

@section('content')

<h2>Data Kwitansi</h2>

<a href="/kwitansi/create">+ Tambah Kwitansi</a>

<br><br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nomor Kwitansi</th>
        <th>Tanggal</th>
        <th>Jumlah</th>
        <th>Admin ID</th>
        <th>Aksi</th>
    </tr>

    @foreach($data as $k)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $k->nomor_kwitansi }}</td>
        <td>{{ $k->tanggal }}</td>
        <td>Rp {{ number_format($k->jumlah, 0, ',', '.') }}</td>
        <td>{{ $k->admin_id }}</td>
        <td>
            <form action="/kwitansi/{{ $k->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Yakin hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

@endsection