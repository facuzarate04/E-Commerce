<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mi Pedido') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="text-center text-white bg-gray-900 p-2 overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="font-bold text-3xl">Confirmar pedido</h1>
            </div>
                
            @livewire('comprador.detalle-pedido',['pedido'=>$pedido])            

        </div>
    </div>


</x-app-layout>
