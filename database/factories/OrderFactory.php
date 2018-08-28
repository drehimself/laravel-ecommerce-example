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

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 50),
        'billing_email' => $faker->unique()->safeEmail,
        'billing_name' => $faker->name,
        'billing_address' => $faker->address,
        'billing_city' => $faker->city,
        'billing_province' => $faker->state,
        'billing_postalcode' => str_random(9),
        'billing_phone' => $faker->phoneNumber,
        'billing_name_on_card' => $faker->name,
        'billing_subtotal' => rand(1000, 100000),
        'billing_tax' => rand(1000, 5000),
        'billing_total' => rand(1000, 100000),
    ];
});
