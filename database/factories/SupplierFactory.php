<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Supplier;
use Faker\Generator as Faker;

$factory->define(Supplier::class, function (Faker $faker) {
    return [
        'Name' => $faker->name,
        'Email' => $faker->unique()->safeEmail,
        "Address" => $faker->address,
        "Phone" => $faker->phoneNumber,

    ];
});
