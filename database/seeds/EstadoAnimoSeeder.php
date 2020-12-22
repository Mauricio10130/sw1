<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoAnimoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado_animo')->insert([
            [
                'estado' => 1,
                'uniformado' => 13,
                'rutaImagen' => 'C:Users/SW1',
                'asistencia' => 10,
                'persona_id' => 1
            ],
            [
                'estado' => 2,
                'uniformado' => 15,
                'rutaImagen' => 'C:Users/SW',
                'asistencia' => 12,
                'persona_id' => 2
            ],
        ]);
    }
}
