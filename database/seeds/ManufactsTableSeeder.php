<?php

use App\Models\Manufacturer;
use Illuminate\Database\Seeder;

class ManufactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manufacturer::create([
            "Name" => "Alcatel",
            "Slug" => "Alcatel"
        ]);
        Manufacturer::create([
            "Name" => "Apple",
            "Slug" => "Apple"
        ]);
        Manufacturer::create([
            "Name" => "Huawei",
            "Slug" => "Huawei"
        ]);
        Manufacturer::create([
            "Name" => "LG",
            "Slug" => "LG"
        ]);
        Manufacturer::create([
            "Name" => "Samsung",
            "Slug" => "Samsung"
        ]);
        Manufacturer::create([
            "Name" => "ZTE",
            "Slug" => "ZTE"
        ]);
    }
}
