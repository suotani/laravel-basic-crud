<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ["name", "owner_name", "age", "address", "phone_number", "description"];

    public static $validates = [
        "name" => "required|max:20",
        "owner_name" => "required"
    ];
}
