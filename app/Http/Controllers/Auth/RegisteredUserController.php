<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Departamento;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        $departamentos = Departamento::all();
        // $departamentos1 = Departamento::pluck('nombre', 'id');
        
        return view('auth.register', [
            'departamentos' => $departamentos,
            // 'departamentos1' => $departamentos1
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'cedula' => ['required', 'string', 'max:255'],
            'departamento' => ['required', 'string', 'max:255'],
            'ciudad' => ['required', 'string', 'max:255'],
            'celular' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'habeas_data' => ['required', 'string', 'max:255'],
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'apellido' => $request->apellido,
            'cedula' => $request->cedula,
            'departamento' => $request->departamento,
            'ciudad' => $request->ciudad,
            'celular' => $request->celular,
            'email' => $request->email,
            'habeas_data' => $request->habeas_data,
            // 'password' => Hash::make($request->password),
        ]);

        // event(new Registered($user));

        // Auth::login($user);

        return back()->with('mensaje', 'Registro Exitoso');

        // return redirect()->route('auth.register')->with('success','Registro Exitoso');

        // return redirect(RouteServiceProvider::HOME);
    }
}
