@extends('layouts.main')

@section('container')
    <h1 style="color: blue; font-size: 24px;">Detail Produk</h1>

    <table class="table">
        <tr>
            <th scope="col">ID</th>
            <td>{{ $product->id }}</td>
        </tr>
        <tr>
            <th scope="col">Nama</th>
            <td>{{ $product->name }}</td>
        </tr>
        <tr>
            <th scope="col">Deskripsi</th>
            <td>{{ $product->description }}</td>
        </tr>
        <tr>
            <th scope="col">Harga</th>
            <td>{{ $product->price }}</td>
        </tr>
        <tr>
            <th scope="col">Stok</th>
            <td>{{ $product->stock }}</td>
        </tr>
    </table>

    <a href="/products" class="btn btn-primary">Kembali</a>
@endsection
