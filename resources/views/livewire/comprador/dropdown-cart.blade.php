<div class="">

    <x-jet-dropdown width="96">

        <x-slot name="trigger">
            <span class="relative inline-block">
                <x-cart />
                @if (Cart::count())
                    <span
                        class="absolute top-1 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">{{ Cart::count() }}</span>
                @else
                    <span
                        class="absolute top-1 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">0</span>
                @endif

            </span>
        </x-slot>

        <x-slot name="content">

            <ul class="text-center text-white">
                @forelse (Cart::content() as $producto)
                    <div class="w-full justify-center flex p-1">
                        <div class="w-4/5">
                            <x-producto-dropdown :producto="$producto" />
                        </div>
                        <button wire:click="removeItem('{{$producto->rowId}}')" class="bg-red-600 text-sm p-1 mx-2 rounded-xl flex-1 m-auto">
                            Eliminar
                         </button>

                    </div>
                @empty
                    <b class=" py-2 m-auto text-white font-semibold">
                        ¡Aún no has agregado ningún producto!
                    </b>
                @endforelse

            </ul>
            <!--MONTOS TOTALES-->
            <div class="m-auto mt-4 flex justify-center w-full bg-gray-200">
                <b class=" font-semibold text-sm">Subtotal: <b > $ {{Cart::subtotal()}}</b></b>
            </div>
            <!--VACIAR CARRITO-->
            <div class="m-auto mt-4 flex justify-center w-full">
                <button wire:click="eliminarCarrito" class="w-1/2 rounded-xl bg-red-500 font-bold p-1">Vaciar carrito</button>
            </div>
            <!--IR AL PEDIDO-->
            <div class="m-auto mt-2 flex justify-center w-full">
                <a href="{{route('mi-pedido')}}" class="text-center w-1/2 rounded-xl bg-yellow-600 font-bold p-1">Ver mi carrito</a>
            </div>

        </x-slot>


    </x-jet-dropdown>

</div>
