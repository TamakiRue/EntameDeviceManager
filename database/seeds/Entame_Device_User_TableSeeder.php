<?php

use Illuminate\Database\Seeder;

class Entame_Device_User_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('entame_devices')->insert([
            [
                'id' => '1',
                'device_name' => 'iPhone 11',
                'device_pattern' => 'Phone',
                'device_os' => 'iOS',
                'borrower' => '玉城龍樹',
                'when_rented' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],
        ]);
    }
}
