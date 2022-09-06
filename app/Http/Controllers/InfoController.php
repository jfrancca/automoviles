<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index ()
    {
        $cantidad_registros = User::count();
        
        return view('info.index',[
            'cantidad_registros' => $cantidad_registros
        ]);
    }
}
