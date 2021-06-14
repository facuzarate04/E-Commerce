<div class="">

    <!--Dropdown Estado del pedido-->
    <div class=" px-2 flex justify-center py-4">
        <div x-data="{ dropdownOpen: false }" class="">
            <button @click="dropdownOpen = !dropdownOpen"
                class="relative z-10 block rounded-md bg-white p-2 focus:outline-none text-black flex">Estado {{$pedidoestado}}
                <svg class="m-auto h-6 w-6 text-gray-800" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </button>

            <div x-show="dropdownOpen" class="absolute mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                @foreach ($pedidostates as $pedidostate)
                    <a @click="dropdownOpen = !dropdownOpen"
                        class=" cursor-pointer block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white"
                        wire:click="$set('pedidoestado','{{ $pedidostate->name }}')">
                        {{ $pedidostate->name }}
                    </a>
                @endforeach
            </div>
        </div>

        <button wire:click="limpiar" class="text-black px-2 font-semibold my-auto cursor-pointer">
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                    clip-rule="evenodd" />
            </svg></button>

    </div>



    @if ($pedidos)
        <div class="text-center md:grid grid-cols-4 gap-2 p-10">
            @foreach ($pedidos as $pedido)
                <div class="col-span-2">
                    <x-comprador.pedido-plantilla :pedido="$pedido" />
                </div>
            @endforeach
        </div>
    @else
        NO TIENES PEDIDOS
    @endif

</div>
