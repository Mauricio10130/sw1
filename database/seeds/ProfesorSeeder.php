<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profesores')->insert([
            [
                'salario' => 2800,
                'persona_id' => 1
            ],
            [
                'salario' => 2500,
                'persona_id' => 2
            ]
        ]);
    }
}
