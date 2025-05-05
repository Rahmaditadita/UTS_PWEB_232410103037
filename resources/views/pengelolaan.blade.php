@extends('layouts.app')

@section('content')
<h2>Data Pengelolaan</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama Produk</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <td>{{ $item['nama'] }}</td>
            <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
