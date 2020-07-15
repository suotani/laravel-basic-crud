<?php

use Illuminate\Database\Seeder;
use App\Shop;

class ShopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shops = [
            [
              "PineApple", "スティーブ", "50", "America North Carolina",
							"111-1111-1111","Create PipPhone and MaccaBook"
            ],
            [
							"MacroSoft", "ビル", "80", "Japan Okinawa",
							"0120-333-906", "Create PC and any software"
						],
            [
							"Yamazon", "田中", "90", "Kanada Dokoka",
							"0120-838-838", "Sell any books and more"
						],
            [
							"Jnet", "高田井", "40", "Japan Osaka",
							"0120-666-444", "テレビ通販です"
						]
				];

				foreach ($shops as $shop) {
					Shop::create([
						"name" => $shop[0],
						"owner_name" => $shop[1],
						"age" => $shop[2],
						"address" => $shop[3],
						"phone_number" => $shop[4],
						"description" => $shop[5]
					]);
				}
    }
}
