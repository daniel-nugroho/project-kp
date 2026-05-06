@extends('layouts.app')

@section('content')
<h3>Data Surat</h3>

<a href="/surat/create" class="btn btn-success mb-3">Tambah</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nomor</th>
        <th>Tanggal</th>
    </tr>

    @foreach($data as $d)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $d->nomor_surat }}</td>
        <td>{{ $d->tanggal }}</td>
    </tr>
    @endforeach
</table>
@endsection