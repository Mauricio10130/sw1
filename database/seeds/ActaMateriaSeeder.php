<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActaMateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('acta_materia')->insert([
            [
                'materia_id' => 1,
                'acta_nota_id' => 1,
                'puntaje' => 70
            ],
            [
                'materia_id' => 2,
                'acta_nota_id' => 2,
                'puntaje' => 80
            ],
        ]);
    }
}
