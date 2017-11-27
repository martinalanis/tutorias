<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        	['username' => '10101010',
        	'name' => 'Lorenzo',
        	'last_name' => 'Perez',
        	'second_last_name' => 'Rodriguez',
        	'career_id' => 'ISIC',
        	'group_id' => 'ISIC-2016-3-B',
        	'type' => 'tutorado',
        	'email'=>  'tutorado@correo.com',
        	'password' => bcrypt('12345')],
        	['username' => 'AAA2016',
        	'name' => 'Alejandro',
        	'last_name' => 'Amaro',
        	'second_last_name' => 'Flores',
        	'career_id' => 'ITIC',
        	'group_id' => '',
        	'type' => 'otro',
        	'email'=>  'amaro@correo.com',
        	'password' => bcrypt('12345')],
        	['username' => 'BBB2016',
        	'name' => 'Anastacio',
        	'last_name' => 'Antolino',
        	'second_last_name' => 'Hernandez',
        	'career_id' => 'ISIC',
        	'group_id' => '',
        	'type' => 'otro',
        	'email'=>  'antolino@correo.com',
        	'password' => bcrypt('12345')]
        	]);
    }
}
