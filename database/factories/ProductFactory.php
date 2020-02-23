<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Device;
use App\Models\Image;
use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\Supplier;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    $name= $faker->word;
    return [

        "Name" => $name,
        'Slug' =>Str::slug($name,'-'),

        'Supplier_id' => function(){
            return Supplier::all()->random();
        },
       'Manufacturer_id'=> function(){
            return Manufacturer::all()->random();
        },
       'Device_id'=> function(){
            return Device::all()->random();
        },
       'Image_id'=> function(){
            return Image::all()->random();
        },
    ];
});
