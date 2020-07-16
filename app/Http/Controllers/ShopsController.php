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

		public function store(Request $req)
		{
			$this->validate($req, Shop::$validates);
			$shop = new Shop();
			$shop->fill($req->except('_token'))->save();
			
			return redirect("/shops");
		}

		public function edit($id)
		{
			$shop = Shop::find($id);
			return view("shops.edit", compact("shop"));
		}

		public function update(Request $req, $id)
		{
			$this->validate($req, Shop::$validates);
			$shop = Shop::find($id);
			$shop->fill($req->except('_token', '_method'))->save();
			return redirect("/shops/".$shop->id);
		}

		public function destroy(Request $req, $id)
		{
			$shop = Shop::find($id);
			$shop->delete();
			return redirect("/shops");
		}
}
