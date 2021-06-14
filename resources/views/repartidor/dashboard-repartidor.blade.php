<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Repartidor') }}
        </h2>
    </x-slot>
    <div class="p-10">
        @livewire('repartidor.tomar-pedido')      
    </div>

</x-app-layout>
