<x-guest-layout>

<main class="flex flex-col xl:flex-row h-screen">
    <div class="w-full xl:w-1/2 my-4 h-screen flex items-center justify-center">
        <div class="w-4/6">
            <h1 class="tracking-tight font-light text-gray-500 text-4xl ">Feliz Ganador</h3>

            @foreach ($usuarios as $usuario)
                <h1 class="text-6xl md:text-8xl tracking-tight leading-none font-extrabold text-cyan-500">{{$usuario->name}} {{$usuario->apellido}}</h1>
                <h1 class="tracking-tight font-light text-gray-500 text-2xl ">Fecha Registro: {{$usuario->created_at}}</h3>                            
                <h1 class="tracking-tight font-light text-gray-500 text-2xl ">Departamento: {{$usuario->departamento}}</h3>                            
                <h1 class="tracking-tight font-light text-gray-500 text-2xl ">Ciudad: {{$usuario->ciudad}}</h3>                                                
            @endforeach 

            <h1 class="tracking-tight font-light text-gray-500 text-4xl ">Duisfruta tu premio ¡Muchas felicidades! </h3>
            <a href="/" class="inline-block bg-cyan-500 hover:bg-pink-600 mt-3 px-6 py-3 rounded-md text-white font-bold">Inicio</a>
        </div>
    </div>
    <div class="w-full xl:w-1/2 h-screen">
        <img class="object-cover w-full h-screen" src="https://images.pexels.com/photos/10967/pexels-photo-10967.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="Robot Group">
    </div>
</main>

</x-guest-layout>
                   


    




