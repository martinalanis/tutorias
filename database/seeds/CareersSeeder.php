<?php

use Illuminate\Database\Seeder;

class CareersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('careers')->insert([
        	['identifier' => 'DESA', 'name' => 'Desarrollo Académico'],
        	['identifier' => 'IBIQ', 'name' => 'Ingeniería Bioquimica'],
        	['identifier' => 'IELC', 'name' => 'Ingeniería en Electrónica'],
        	['identifier' => 'IELE', 'name' => 'Ingeniería en Eléctrica'],
        	['identifier' => 'IIGE', 'name' => 'Ingeniería en Gestión Empresarial'],
        	['identifier' => 'IIND', 'name' => 'Ingeniería Industrial'],
        	['identifier' => 'IINF', 'name' => 'Ingeniería en Infomática'],
        	['identifier' => 'IMAT', 'name' => 'Ingeniería en Materiales'],
        	['identifier' => 'IMEC', 'name' => 'Ingeniería Mecánica'],
        	['identifier' => 'ISIC', 'name' => 'Ingeniería en Sistemas Computacionales'],
        	['identifier' => 'ITIC', 'name' => 'Ingeniería en Tecnologías de la Información y Comunicacion'],
        	['identifier' => 'LADM', 'name' => 'Licenciatura en Administracion'],
        	['identifier' => 'LCON', 'name' => 'Contador Público']
        ]);
    }
}
