<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vendedor') }}
        </h2>
    </x-slot>
    
    @livewire('vendedor.administrar-mi-local') 
   
            
</x-app-layout>
