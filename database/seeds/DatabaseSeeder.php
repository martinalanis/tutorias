<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(PollsSeeder::class);
        $this->call(CareersSeeder::class);
        $this->call(TutoresSeeder::class);
        $this->call(GroupsSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(AlumnosSeeder::class);
    }
}
