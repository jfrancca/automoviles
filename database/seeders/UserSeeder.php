<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    User::insert([
        'created_at' => date('Y-m-d'),
        'name' => 'JUAN CAMILO',
        'apellido' => 'FRANCO CARDONA',
        'cedula' => '321321321',
        'departamento' => 'RISARALDA',
        'ciudad' => 'PEREIRA',
        'celular' => '654654654',
        'email' => 'juan@juan.com',
        'habeas_data' => 'SI',
    ]);
    User::insert([
        'created_at' => date('Y-m-d'),
        'name' => 'CARLOS',
        'apellido' => 'ZAPATA',
        'cedula' => '321321321',
        'departamento' => 'RISARALDA',
        'ciudad' => 'PEREIRA',
        'celular' => '654654654',
        'email' => 'carlos@carlos.com',
        'habeas_data' => 'SI',
    ]);
    User::insert([
        'created_at' => date('Y-m-d'),
        'name' => 'LEOBARDO',
        'apellido' => 'GIRALDO',
        'cedula' => '321321321',
        'departamento' => 'RISARALDA',
        'ciudad' => 'PEREIRA',
        'celular' => '654654654',
        'email' => 'leobardo@leobardo.com',
        'habeas_data' => 'SI',
    ]);
    User::insert([
        'created_at' => date('Y-m-d'),
        'name' => 'MARIA',
        'apellido' => 'LOPEZ',
        'cedula' => '321321321',
        'departamento' => 'RISARALDA',
        'ciudad' => 'PEREIRA',
        'celular' => '654654654',
        'email' => 'maria@maria.com',
        'habeas_data' => 'SI',
    ]);
    User::insert([
        'created_at' => date('Y-m-d'),
        'name' => 'SILVANA',
        'apellido' => 'OSORIO',
        'cedula' => '321321321',
        'departamento' => 'RISARALDA',
        'ciudad' => 'PEREIRA',
        'celular' => '654654654',
        'email' => 'silvana@silvana.com',
        'habeas_data' => 'SI',
    ]);

    }
}
