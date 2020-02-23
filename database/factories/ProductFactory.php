<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Device;
use App\Models\Image;
use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\Supplier;
use App\Models\Type;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    $name= $faker->word;
    return [

        "name" => $name,
        'slug' =>Str::slug($name,'-'),

        'supplier_id' => function(){
            return Supplier::all()->random();
        },
       'manufacturer_id'=> function(){
            return Manufacturer::all()->random();
        },
       'device_id'=> function(){
            return Device::all()->random();
        },
       'image_id'=> function(){
            return Image::all()->random();
        },

       'promotion_id'=> function(){
        return Promotion::all()->random();
       },
        'type_id'=>function(){
            return Type::all()->random();
        },

    ];
});
