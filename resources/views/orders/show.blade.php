@extends('layouts.main')

@section('container')
    <h1>Detail Pesanan</h1>
    <table class="table">
        <tr>
            <th>ID:</th>
            <td>{{ $order->id }}</td>
        </tr>
        <tr>
            <th>Nama Pelanggan:</th>
            <td>{{ $order->customer_name }}</td>
        </tr>
        <tr>
            <th>Email Pelanggan:</th>
            <td>{{ $order->customer_email }}</td>
        </tr>
        <tr>
            <th>Jumlah:</th>
            <td>{{ $order->quantity }}</td>
        </tr>
        <tr>
            <th>Total Harga:</th>
            <td>{{ $order->total_price }}</td>
        </tr>
    </table>

    <a href="/orders" class="btn btn-primary">Kembali</a>
@endsection
