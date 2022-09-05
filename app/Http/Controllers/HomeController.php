<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $i = 0;
        $array = [];

        while( $i <= 5)
        {
            $array[] = rand(1, 5);
            $i++;
        }

        $num_aleatorio = array_pop($array);

        $usuarios = User::where('id', $num_aleatorio)->get();

        return view('home.index', [
            'usuarios' => $usuarios
        ]);
    }
}
