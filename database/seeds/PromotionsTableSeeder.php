<?php

use App\Models\Promotion;
use Illuminate\Database\Seeder;

class PromotionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Promotion::create([
            "Name" => "None",
            "Slug" => "None"
        ]);

        Promotion::create([
            "Name" => "BUY 1 GET 1 FREE",
            "Slug" => "BUY-1-GET-1-FREE"
        ]);
        Promotion::create([
            "Name" => "50 % OFF",
            "Slug" => "50-%-OFF"
        ]);
    }
}
