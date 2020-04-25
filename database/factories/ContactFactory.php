<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use App\User;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class)->make(),
        'first_name' => $faker->firstName,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->tollFreePhoneNumber
    ];
});
