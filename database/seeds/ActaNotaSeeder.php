<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActaNotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('acta_nota')->insert([
            [
                'estudiante_id' => 1
            ],
            [
                'estudiante_id' => 2
            ]
        ]);
    }
}
