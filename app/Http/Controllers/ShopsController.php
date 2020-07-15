<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class ShopsController extends Controller
{
    public function index()
    {
				$shops = Shop::orderBy("age", "asc")->get();
				return view("shops.index", ["shops" => $shops]);
    }
}
