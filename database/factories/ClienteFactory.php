<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


use Faker\Generator as Faker;

$factory->define(App\Clientes::class, function (Faker $faker) {
    return [
        'rut_cliente' => $faker->randomNumber,
        'nom_cliente' => $faker->firstName,
        'apePat_cliente' => $faker->lastName,
        'apeMat_cliente' => $faker->lastName,
        'dire_cliente' => $faker->address,
        'ciudad_cliente' => $faker->city,
        'telefono_cliente' => $faker->phoneNumber,
        'email_cliente' => $faker->email
    ];
});
