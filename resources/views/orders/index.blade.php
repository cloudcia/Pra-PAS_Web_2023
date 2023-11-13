@extends('layouts.main')

@section('container')
    <h1>Data Pesanan</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Pelanggan</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->customer_name }}</td>
                    <td>{{ $order->total_price }}</td>
                    <td>
                        <a href="/orders/{{ $order->id }}" class="btn btn-primary">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
