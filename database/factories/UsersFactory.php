<?php

use Faker\Generator as Faker;




$factory->define(App\User::class, function (Faker $faker) {

    return [
    	'matricula' => rand(000000, 999999),
        'nome' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make('123'), // secret
        'tipo_user' => rand(1,3),
        'remember_token' => str_random(10),
    ];
});