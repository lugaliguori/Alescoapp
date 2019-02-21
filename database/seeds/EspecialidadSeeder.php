<?php

use Illuminate\Database\Seeder;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('especialidades')->insert([
        	['id' => 1, 'nombre' => 'Oncólogo'],
        	['id' => 2, 'nombre' => 'Cardiólgo'],
        	['id' => 3,'nombre' => 'Gastroenterólogo'],
        	['id'=> 4, 'nombre' => 'Endocrinólogo'],
        	['id' => 5, 'nombre' => 'Geriatra'],
        	['id' => 6, 'nombre' => 'Hematólogo'],
        	['id' => 7, 'nombre' => 'Neurólogo'],
        	['id' => 8, 'nombre' => 'Oftalmólogo'],
        	['id' => 9, 'nombre' => 'Pediatra'],
        	['id' => 10, 'nombre' => 'Urólogo']
        ]);
    }
}
