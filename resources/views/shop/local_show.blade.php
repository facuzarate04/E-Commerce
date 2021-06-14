<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Local') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="text-center text-white bg-gray-900 p-2 overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="font-bold text-5xl">{{ $local->name }}</h1>
                <h1 class="font-semibold text-xl">{{ $local->localtype->name }}</h1>
            </div>

            <!-- PRODUCTOS -->
            <div class="bg-gray-100 overflow-hidden shadow-xl sm:rounded-lg text-white text-center p-5 mt-5">
                @livewire('comprador.show-products', ['local' => $local])
            </div>
        </div>
    </div>


</x-app-layout>
