<?php

use Faker\Generator as Faker;

$factory->define(App\Invitado::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'appat' => $faker->lastName,
        'apmat' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'titulo' => $faker->randomElement($array = array ('Sr.','Sra.','Srita.','Joven')),
        'evento_id' => 1,
        'user_id' => 2,
    ];
});
