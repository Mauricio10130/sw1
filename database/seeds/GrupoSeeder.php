<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupos')->insert([
            [
                'nombre' => 'Grupo1',
                'descripcion' => 'Este es el Grupo 1'
            ],
            [
                'nombre' => 'Grupo2',
                'descripcion' => 'Este es el Grupo 2'
            ],
        ]);
    }
}
