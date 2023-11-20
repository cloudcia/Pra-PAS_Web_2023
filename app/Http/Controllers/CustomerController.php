<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = customer::all();

        return view('customers.index', ['customers' => $customers]);
    }

    public function show($id)
    {
        $customer = customer::find($id);
        
        return view('customers.show', ['customer' => $customer]);
    }
}