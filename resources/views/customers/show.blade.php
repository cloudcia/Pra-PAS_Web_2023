@extends('layouts.main')

@section('container')
    <h1>Detail Pesanan</h1>
    <table class="table">
        <tr>
            <th>Name:</th>
            <td>{{ $customer->name }}</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>{{ $customer->email }}</td>
        </tr>
        <tr>
            <th>Phone Number:</th>
            <td>{{ $customer->phone_number }}</td>
        </tr>
        <tr>
            <th>Birthday date:</th>
            <td>{{ $customer->birth_date }}</td>
        </tr>
        <tr>
            <th>Address :</th>
            <td>{{ $customer->address }}</td>
        </tr>
    </table>

    <a href="/orders" class="btn btn-primary">Kembali</a>
@endsection