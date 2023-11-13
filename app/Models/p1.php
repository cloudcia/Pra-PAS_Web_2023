<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    private static $products = [
        [ 
            "id" => "1",
            "name" => "Product A",
            "description" => "Description for Product A",
            "price" => 50.00,
            "stock" => 100,
        ],
        [
            "id" => "2",
            "name" => "Product B",
            "description" => "Description for Product B",
            "price" => 75.50,
            "stock" => 50,
        ],
        [
            "id" => "3",
            "name" => "Product C",
            "description" => "Description for Product C",
            "price" => 30.00,
            "stock" => 200,
        ],
        [
            "id" => "4",
            "name" => "Product D",
            "description" => "Description for Product D",
            "price" => 45.25,
            "stock" => 80,
        ],
        [
            "id" => "5",
            "name" => "Product E",
            "description" => "Description for Product E",
            "price" => 60.00,
            "stock" => 120,
        ]
    ];

    public static function all()
    {
        return self::$products;
    }
}