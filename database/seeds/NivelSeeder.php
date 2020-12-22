<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('niveles')->insert([
            [
                'nivel' => 'nivel1',
                'descripcion' => 'Soy el nivel1'
            ],
            [
                'nivel' => 'nivel2',
                'descripcion' => 'Soy el nivel2'
            ]
        ]);
    }
}
