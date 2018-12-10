<?php

use Faker\Generator as Faker;
use Faker\Provider\Fakecar;

$factory->define(App\Veiculo::class, function (Faker $faker) {

	$faker->addProvider(new \Faker\Provider\Fakecar($faker));

	$capacidade = [
		'5',
		'26',
	];

	$status = [
		'disponivel',
		'indisponivel',
	];

	return [
        'placa' => $faker->vehicleRegistration('[A-Z]{3}-[0-9]{4}'),
        'modelo' =>$faker->vehicle,
        'capacidade' => $capacidade[rand(0,1)],
        'status' => $status[rand(0,1)],
    ];
});