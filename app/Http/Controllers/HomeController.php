<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $cantidad_registros = User::count();

        $usuarios = User::where('id', rand(1, $cantidad_registros))->get();

        return view('home.index', [
            'usuarios' => $usuarios,
        ]);
    }
}
