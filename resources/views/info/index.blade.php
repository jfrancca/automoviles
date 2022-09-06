<x-guest-layout>
    <body class="text-gray-700 bg-white antialiased" style="font-family: 'Roboto', sans-serif">
  
        <nav class="text-center flex-wrap p-6">
            @if ($cantidad_registros >= 4)
                <a href="{{ route('home.index') }}" class="text-cyan-50 bg-red-700 font-bold rounded-full mt-6 py-4 px-8 shadow-lg uppercase tracking-wider hover:border-red hover:text-white hover:bg-blue-300">Realizar Sorteo</a href="">                
            @else
                
            @endif        
        </nav>

        <div class="py-20 bg-cover bg-no-repeat bg-fixed" style="background-image: url(https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&w=1600)">
            <div class="container m-auto text-center px-6 opacity-100">
                <h2 class="text-6xl font-bold mb-2 text-red-700 pb-6">Regitra tus datos y participa en el sorteo</h2>
                <a href="{{ route('register') }}" class="bg-white font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider hover:border-transparent hover:text-white hover:bg-blue-300 transition-all">Registro de datos</a>
            </div>
        </div>
                

        <section class="container mx-auto px-6 p-10">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">What is Lorem Ipsum!</h2>
            <div class="flex items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2 pr-10">
                <h4 class="text-3xl text-gray-800 font-bold mb-3">What is Lorem Ipsum</h4>
                <p class="text-gray-600 mb-8">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of.</p>
            </div>
                <div class="w-full md:w-1/2">
                    <img class="rounded-lg" src="https://pbs.twimg.com/media/CR45LOXVEAADG5E.jpg" alt="Vortex" />
                </div>
            </div>
        </section>
                                
        <section style="background-color: #667eea">
            <div class="container mx-auto px-6 text-center py-20">
                    <h2 class="mb-6 text-4xl font-bold text-center text-white">Contrary to popular belief, Lorem Ipsum is not simply random text.</h2>
                    <h3 class="my-4 text-2xl text-white">Contrary to popular belief, Lorem Ipsum is not simply random text.</h3>
            </div>
        </section>                
    </body>

    <script>
        document.getElementById('nav-toggle').onclick = function(){
        document.getElementById("nav-content").classList.toggle("hidden");
        }
    </script>
</x-guest-layout>
