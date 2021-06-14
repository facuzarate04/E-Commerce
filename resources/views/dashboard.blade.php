<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <!--MOSTRAR CATEGORIAS PARA FILTAR LOCALES-->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-100 overflow-hidden shadow-xl sm:rounded-lg text-white text-center p-5">
                <!-- LOCALS --> 

                @livewire('comprador.local-search',['localtypes' => $localtypes])
              
            </div>
        </div>
    </div>
</x-app-layout>
