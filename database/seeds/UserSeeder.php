<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'email' => 'admin@gmail.com',
                'password' => bcrypt('adminadmin'),
                'grupo_id' => 1
            ],
            [
                'email' => 'juan@gmail.com',
                'password' => bcrypt('adminadmin'),
                'grupo_id' => 2
            ]
        ]);
    }
}
