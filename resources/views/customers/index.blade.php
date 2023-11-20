@extends('layouts.main')

@section('container')
    <h1>Customer</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Birth Date</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone_number }}</td>
                    <td>{{ $customer->birth_date }}</td>
                    <td>{{ $customer->address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection