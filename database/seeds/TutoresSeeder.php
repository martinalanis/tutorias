<?php

use Illuminate\Database\Seeder;
use Faker\Generator;

class TutoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

        factory(App\User::class, 6)->create([
        	'type' => 'otro',
        	'group_id' => NULL,
        	// 'username' => $faker->firstName.$faker->word.$faker->randomNumber(4, true),
        ]);
    }
}
