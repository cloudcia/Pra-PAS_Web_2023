<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    private static $orders = [
        [ 
            "id" => "1",
            "product_id" => 1,
            "customer_name" => "John Doe",
            "customer_email" => "john@example.com",
            "quantity" => 2,
            "total_price" => 100.00,
        ],
        [
            "id" => "2",
            "product_id" => 3,
            "customer_name" => "Jane Smith",
            "customer_email" => "jane@example.com",
            "quantity" => 1,
            "total_price" => 30.00,
        ],
        [
            "id" => "3",
            "product_id" => 2,
            "customer_name" => "Bob Johnson",
            "customer_email" => "bob@example.com",
            "quantity" => 3,
            "total_price" => 226.50,
        ],
        [
            "id" => "4",
            "product_id" => 4,
            "customer_name" => "Alice Brown",
            "customer_email" => "alice@example.com",
            "quantity" => 1,
            "total_price" => 45.25,
        ],
        [
            "id" => "5",
            "product_id" => 5,
            "customer_name" => "Charlie White",
            "customer_email" => "charlie@example.com",
            "quantity" => 2,
            "total_price" => 120.00,
        ]
    ];

    public static function all()
    {
        return self::$orders;
    }
}
