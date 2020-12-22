<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->insert([
            [
                'materia' => 'Matemáticas',
                'turno' => 'Mañana',
                'nivel_id' => 1
            ],
            [
                'materia' => 'Lenguaje',
                'turno' => 'Tarde',
                'nivel_id' => 2
            ]
        ]);
    }
}
