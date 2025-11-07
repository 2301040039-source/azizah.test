@extends('layout.masterlayout')
@section('title', 'hal produk')
@section('content')
<h1>
    {{ $product['id'] }}<br>
    {{ $product['barang'] }}<br>
    RP{{ $product['harga'] }}<br>
</h1>
@endsection