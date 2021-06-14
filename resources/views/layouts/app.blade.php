<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('images/logo.png') }}">
        <title>PediloTrank</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        @livewireScripts
    </head>
    <body class="bg-gradient-to-t from-gray-400 to-gray-100 bg-no-repeat min-h-screen ">
        <x-jet-banner />

        <div class="bg-gradient-to-t from-gray-400 to-gray-100 bg-no-repeat min-h-screen">
            
            @switch(Auth::user()->role_id)
                @case(1)<!--Admin-->
                    @livewire('admin.navigation-menu-admin') 
                    @break
                @case(2)<!--Vendedor-->
                    @livewire('vendedor.navigation-menu-vendedor') 
                    @break
                @case(3)<!--Repartidor-->
                @livewire('repartidor.navigation-menu-repartidor')
                    @break
                @default<!--Comprador-->
                    @livewire('navigation-menu')  
            @endswitch
           
            

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')


    </body>
</html>
