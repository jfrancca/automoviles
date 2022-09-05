<h1>desde home index</h1>

@foreach ($usuarios as $usuario)
    {{$usuario->name}}
    {{$usuario->apellido}}
    {{$usuario->cedula}}
@endforeach