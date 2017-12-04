<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
        	['user_id' => 2,
        	'rol' => 'tutor',
        	'career_id' => 'ITIC'],
        	['user_id' => 3,
        	'rol' => 'administrador',
        	'career_id' => 'ISIC'],
        	['user_id' => 3,
        	'rol' => 'coordinador',
        	'career_id' => 'ISIC'],
        	['user_id' => 3,
        	'rol' => 'tutor',
        	'career_id' => 'ISIC']
        	]);

        factory(App\Rol::class, 6)->create();
    }
}
