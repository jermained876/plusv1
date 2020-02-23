<?php

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Supplier::class,1)->create(["Supplier_Code"=>"WAB"]);
        factory(Supplier::class,1)->create(["Supplier_Code"=>"WAF"]);
        factory(Supplier::class,1)->create(["Supplier_Code"=>"WAC"]);
        factory(Supplier::class,1)->create(["Supplier_Code"=>"WAM"]);
    }
}
