<?php

use Illuminate\Database\Seeder;

class PollsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('polls')->insert([
        	['name' => 'encuesta1',
        	'user_id' => 2,
        	'poll' => '[{"number":1,"value":"Pregunta 1"},{"number":2,"value":"Pregunta 2"},{"number":3,"value":"Pregunta 3"},{"number":4,"value":"Pregunta 4"}]'],
        	]);
    }
}
