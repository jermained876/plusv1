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
        factory(Image::class,100)->create()->each( function($image){
            factory(Product::class,1)->create([
                "Image_id" => $image->id,
            ]);
        });
    }
}
