<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\OrderProduct::class, function (Faker $faker) {
    return [
        'order_id' => rand(1, 100),
        'product_id' => rand(1, 84),
        'quantity_item' => rand(1, 4),
    ];
});
