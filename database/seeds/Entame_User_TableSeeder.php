<?php

use Illuminate\Database\Seeder;

class Entame_User_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('entame_users')->insert([
            [
                'id' => '1',
                'name' => '玉城龍樹',
                'rented_device_num' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],
        ]);
    }
}
