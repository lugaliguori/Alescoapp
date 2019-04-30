<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            'nombre' => 'admin',
            'apellido' => 'admin',
            'cedula' => '25458987',
            'correo' => 'admin@gmail.com',
            'password' => Hash::make(12345678),
            'admin' => true,
            'pacientes_dia' => 10,
            'horario' => '08:30:00',
            'id_especialidad' => 1
        ]);
    }
}

