<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            "Name" => "Admin",
            "Slug" => "Admin"
        ]);
        Role::create([
            "Name" => "Owner",
            "Slug" => "Owner"
        ]);
        Role::create([
            "Name" => "Customer",
            "Slug" => "Customer"
        ]);
        Role::create([
            "Name" => "Supplier",
            "Slug" => "Supplier"
        ]);
    }
}
