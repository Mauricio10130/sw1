<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'grupos',
            'users',
            'tipo_usuario',
            'personas',
            'estado_animo',
            'estudiantes',
            'profesores',
            'acta_nota',
            'niveles',
            'materias',
            'acta_materia'
        ]);

        $this->call(GrupoSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TipoUsuarioSeeder::class);
        $this->call(PersonaSeeder::class);
        $this->call(EstadoAnimoSeeder::class);
        $this->call(EstudianteSeeder::class);
        $this->call(ProfesorSeeder::class);
        $this->call(ActaNotaSeeder::class);
        $this->call(NivelSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(ActaMateriaSeeder::class);
    }
    protected function truncateTables(array $tables)
    {
        foreach ($tables as $table){
            DB::table($table)->truncate();
        }
    }
}
