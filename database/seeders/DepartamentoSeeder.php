<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamento::insert([
            'nombre' => 'Amazonas'
        ]);
        Departamento::insert([
            'nombre' => 'Antioquia'
        ]);
        Departamento::insert([
            'nombre' => 'Arauca'
        ]);
        Departamento::insert([
            'nombre' => 'Atlántico'
        ]);
        Departamento::insert([
            'nombre' => 'Bogotá'
        ]);
        Departamento::insert([
            'nombre' => 'Bolívar'
        ]);
    }
}
