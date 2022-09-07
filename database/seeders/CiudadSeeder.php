<?php

namespace Database\Seeders;

use App\Models\Ciudad;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ciudad::insert([
            'nombre' => 'Leticia'
        ]);
        Ciudad::insert([
            'nombre' => 'Medellín'
        ]);
        Ciudad::insert([
            'nombre' => 'Arauca'
        ]);
        Ciudad::insert([
            'nombre' => 'Barranquilla'
        ]);
        Ciudad::insert([
            'nombre' => 'Bogotá'
        ]);
        Ciudad::insert([
            'nombre' => 'Cartagena de Indias'
        ]);
    }
}
