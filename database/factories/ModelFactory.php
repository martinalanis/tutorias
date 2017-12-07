<?php

use App\User;
use App\Group;
use App\Rol;
use Faker\Generator;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(User::class, function (Generator $faker) {
	$careers = ['DESA','IBIQ','IELC','IELE','IIGE','IIND','IINF','IMAT','IMEC','ISIC','ITIC','LADM','LCON'];

    return [
    	'username' => $faker->regexify('[0-9]{8}'),
        'name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'second_last_name' => $faker->lastName,
        'career_id' => $faker->randomElement($careers),
        'group_id' => $faker->numberBetween(1, 20),
        'type' => 'tutorado',
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('12345'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Group::class, function (Generator $faker) {

	$careers = ['DESA','IBIQ','IELC','IELE','IIGE','IIND','IINF','IMAT','IMEC','ISIC','ITIC','LADM','LCON'];
	$group = ['A', 'B'];
	$periodo = ['Enero-Junio', 'Verano', 'Agosto-Diciembre'];
    $semestre = $faker->numberBetween($min = 1, $max = 3);

    return [
        'identifier' => $faker->randomElement($careers).'-'.$faker->numberBetween($min = 2014, $max = 2017).'-'.$semestre.'-'.$faker->randomElement($group),
        'name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'periodo' => $faker->randomElement($periodo),
        'career_id' => $faker->randomElement($careers),
        'user_id' => $faker->numberBetween($min = 4, $max = 9),
        'semestre' => $semestre
    ];
});

$factory->define(Rol::class, function (Generator $faker) {

	$careers = ['DESA','IBIQ','IELC','IELE','IIGE','IIND','IINF','IMAT','IMEC','ISIC','ITIC','LADM','LCON'];

	return [
		'user_id' => $faker->numberBetween($min = 4, $max = 9),
		'rol' => 'tutor',
		'career_id' => $faker->randomElement($careers),
	];
});