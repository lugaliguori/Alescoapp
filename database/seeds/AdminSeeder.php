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
            'correo' => 'admin@gmail.com',
            'password' => Hash::make(12345678),
            'admin' => true,
            'id_especialidad' => 1
        ]);
    }
}
