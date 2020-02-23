<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Image;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Image::class, function (Faker $faker) {
    $name = $faker->word;
    return [
        "name" => $name,
        'slug' =>Str::slug($name,'-'),
        "image_url"=> "https://res.cloudinary.com/jd999dawkins/image/upload/v1582407738/IMG-20200222-WA0024.jpg",


    ];
});
