<?php

use Faker\Generator as Faker;

$factory->define(App\Solicitacao::class, function (Faker $faker) {
    $situacao = [
        'Em andamento',
        'Negada',
        'Aceita',
    ];

    return [
    	'data_inicio'=>$faker->date,
        'data_fim'=>$faker->date,
        'local'=>$faker->city,
        'qtdd_passageiros'=>rand(4, 26),
        'user_requerente'=>function(){
            $count = App\User::get()->count();
            return App\User::find(rand(1, $count));
        },
        'veiculo'=>function(){
            $count = App\Veiculo::get()->count();
            return App\Veiculo::find(rand(1, $count));
        },
        'motorista'=>function(){
            $motoristas = App\User::where('tipo_user','3')->get();
            return $motoristas[rand(0,count($motoristas)-1)]->id;
        },
        'situacao'=>$situacao[rand(0, 2)],
    	
    ];
});