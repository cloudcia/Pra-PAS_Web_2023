<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    private static $customers = [
        [ 
            "name" => "John Doe",
            "email" => "john@example.com",
            "phone_number" => "0816867351",
            "birth_date" => "18-12-2006",
            "address" => "Kudus"
        ],
        [ 
            "name" => "Jane Smith",
            "email" => "jane@example.com",
            "phone_number" => 2,
            "birth_date" => "18-12-2006",
            "address" => "Jepara"
        ],
        [ 
            "name" => "Bob Johnson",
            "email" => "bob@example.com",
            "phone_number" => 2,
            "birth_date" => "18-12-2006",
            "address" => "Demak"
        ],
        [ 
            "name" => "Alice Brown",
            "email" => "alice@example.com",
            "phone_number" => 2,
            "birth_date" => "18-12-2006",
            "address" => "Pati"
        ],
        [ 
            "name" => "Charlie White",
            "email" => "charlie@example.com",
            "phone_number" => 2,
            "birth_date" => "18-12-2006",
            "address" => "Semarang"
        ],
    ];
    public static function all()
    {
        return self::$customers;
    }
}