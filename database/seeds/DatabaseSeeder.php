<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RolesTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(TypesTableSeeder::class);
         $this->call(SuppliersTableSeeder::class);
         $this->call(PromotionsTableSeeder::class);
         $this->call(ManufactsTableSeeder::class);
         $this->call(DevicesTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
    }
}
