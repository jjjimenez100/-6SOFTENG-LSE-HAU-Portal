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
        $this->call(CollegesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        //$this->call(EventsTableSeeder::class);
        //$this->call(RegistrationsTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
