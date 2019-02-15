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
        	['id' => 1, 'nombre' => 'Oncologo'],
        	['id' => 2, 'nombre' => 'Cardiolgo'],
        	['id' => 3,'nombre' => 'Gastroenterologo'],
        	['id'=> 4, 'nombre' => 'Endocrinologo'],
        	['id' => 5, 'nombre' => 'Geriatra'],
        	['id' => 6, 'nombre' => 'Hematologo'],
        	['id' => 7, 'nombre' => 'Neurologo'],
        	['id' => 8, 'nombre' => 'Oftalmologo'],
        	['id' => 9, 'nombre' => 'Pediatra'],
        	['id' => 10, 'nombre' => 'Urologo']
        ]);
    }
}
