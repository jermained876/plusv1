<?php

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(Product::class,200)->create()->each(function($product){
        factory(Image::class,1)->create([
            'product_id' => $product->id,
        ]);
       });
    }
}
