<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            [
                'nombre' => 'Admin',
                'apellido' => 'Administrador',
                'ci' => '88966312',
                'telefono' => '66666621',
                'direccion' => 'Av Landivar',
                'tipo_usuario_id' => 1,
                'user_id' => 1
            ],
            [
                'nombre' => 'Juan',
                'apellido' => 'Torrez',
                'ci' => '88966333',
                'telefono' => '6666633',
                'direccion' => 'Av Brasil',
                'tipo_usuario_id' => 2,
                'user_id' => 2
            ],
        ]);
    }
}
