<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Comprador') }}
        </h2>
    </x-slot>
    
    @livewire('comprador.mis-pedidos') 
   
            
</x-app-layout>