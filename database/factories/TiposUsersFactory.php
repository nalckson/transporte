<?php

use Faker\Generator as Faker;

$factory->define(App\TipoUser::class, function (Faker $faker) {

	static $id = 0;

	$tipo = [
        'tecnico',
        'professor',
        'motorista',
    ];

    return [
    	'descricao' => $tipo[$id++],
    ];
});


