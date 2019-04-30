<?php

use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            'nombre' => 'test patient',
            'cedula' => '23478521',
            'correo' => 'lugaliguori@gmail.com',
            'fecha_nac' => '1994-05-22',
            'sexo' => 'M',
            'procedencia' => 'distrito capital',
            'telefono' => '01234584',
            'faltas' => 0,
            'password' => Hash::make(12345678),
        ]);
    }
}
