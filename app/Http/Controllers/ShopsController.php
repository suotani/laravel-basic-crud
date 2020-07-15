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
		
		public function show($id)
		{
			$shop = Shop::find($id);
			return view("shops.show", compact("shop"));
		}

		public function create()
		{
			return view("shops.create");
		}
}
