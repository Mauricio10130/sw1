<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_usuario')->insert([
            [
                'tipo' => 'Usuario1',
                'descripcion' => 'Soy el usuario 1'
            ],
            [
                'tipo' => 'Usuario2',
                'descripcion' => 'Soy el usuario 2'
            ]
        ]);
    }
}
