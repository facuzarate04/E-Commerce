<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PediloTrank</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="bg-gradient-to-t from-gray-400 to-gray-100 bg-no-repeat min-h-screen">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline"></a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline"></a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline"></a>
                @endif
            @endauth
        </div>
    @endif

    <!-- SocioComercial NavBar -->
    <div class="w-full flex py-4 px-10 lg:px-20 justify-end bg-black ">        
      <a href="{{route('socio')}}" class="font-semibold text-white cursor-pointer px-4 hover:bg-gray-800 rounded-xl">Ser socio comercial</a>
    </div>

    <div class="relative overflow-hidden min-h-screen">    

      <!-- Contenido - imagen y botón entrar -->
        <div class="max-w-7xl mx-auto">
            <div class="relative pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">

                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-black sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">¡Bienvenidos!</span><br>

                        </h1>
                        <p
                            class="mt-3 text-base text-black sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            <b>Pedilo Trank</b> es una aplicación de pedidos a domicilio que abarca la mayor parte de la
                            zona este de la provincia de Mendoza, Argentina.
                            <br>Con nosotros vas a poder comprar, recibir, ofertar y vender los productos que desees,
                            sin necesidad de salir de tu casa o comercio.

                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class=" rounded-xl shadow-xl">
                                <a href="{{ route('login') }}"
                                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-xl text-white bg-yellow-600 hover:bg-yellow-900 md:py-4 md:text-lg md:px-10">
                                    Entrar
                                </a>
                            </div>

                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="z-10 lg:mr-10 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 object-contain m-auto sm:h-72 md:h-96 lg:w-full lg:h-full" src="images/logo.png" alt="">
        </div>
    </div>

    <!--FOTER -->

    <div class="w-full flex items-center justify-center bg-black ">
        <div class="md:w-2/3 w-full px-4 text-white flex flex-col">
            <div class="flex flex-col">
                <div class="flex mt-24 mb-12 flex-row md:justify-between">
                    
                    <b class="m-auto md:m-0 font-semibold">PediloTrank</b>
                    
                    <a href=""
                        class="hidden md:block cursor-pointer text-gray-600 hover:text-white uppercase">Nosotros</a>
                    <a href=""
                        class="hidden md:block cursor-pointer text-gray-600 hover:text-white uppercase">Servicios</a>
                    <a href=""
                        class="hidden md:block cursor-pointer text-gray-600 hover:text-white uppercase">Contacto</a>

                </div>
                <hr class="border-gray-600" />
                <p class="w-full text-center my-12 text-gray-600">Copyright © 2021 Facundo Zarate</p>
            </div>
        </div>
    </div>





</body>

</html>
