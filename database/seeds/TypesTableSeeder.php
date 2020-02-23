<?php

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            "Name" => "Audio",
            "Slug" => "Audio"
        ]);
        Type::create([
            "Name" => "Cables & Chargers",
            "Slug" => "Cables-&-Chargers"
        ]);
        Type::create([
            "Name" => "Cases",
            "Slug" => "Cases"
        ]);
        Type::create([
            "Name" => "Holders & Mounts",
            "Slug" => "Holders-&-Mounts"
        ]);
        Type::create([
            "Name" => "Powerbanks",
            "Slug" => "Powerbanks"
        ]);
        Type::create([
            "Name" => "Storage",
            "Slug" => "Storage"
        ]);
        Type::create([
            "Name" => "Tools & Parts",
            "Slug" => "Tools-&-Parts"
        ]);
        Type::create([
            "Name" => "Phone",
            "Slug" => "Phone"
        ]);
        Type::create([
            "Name" => "Other",
            "Slug" => "Other"
        ]);
    }
}
