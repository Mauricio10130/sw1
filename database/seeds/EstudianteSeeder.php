<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estudiantes')->insert([
            [
                'nivel' => 'primaria',
                'persona_id' => 1
            ],
            [
                'nivel' => 'secundaria',
                'persona_id' => 2
            ],
        ]);
    }
}
