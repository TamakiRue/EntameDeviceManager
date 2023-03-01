<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(Entame_User_TableSeeder::class);
        $this->call(Entame_Device_User_TableSeeder::class);
    }
}
