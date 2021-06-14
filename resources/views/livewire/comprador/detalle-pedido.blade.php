<div class="bg-gray-400 overflow-hidden shadow-xl sm:rounded-lg text-white text-center p-5 mt-5 md:flex">

    <!-- PRODUCTOS -->
    <div class="md:w-1/2">
        @foreach (Cart::content() as $producto)
            <x-producto-cart :producto='$producto' />
        @endforeach
    </div>

    <!--DATOS Y RESUMEN-->
    <div class="flex-1 p-10 bg-gray-900 md:ml-5 rounded overflow-hidden">
        <form action="{{ route('confimar.pedido') }}" method="POST">
            @csrf

            <label for="showopcionales">Recibir Pedido en otra ubicación</label>
            <input type="radio" wire:click="showopcionales">
            
            <x-jet-validation-errors class="mb-4" />
            @if($showopcionales == 1)
                        
            <x-comprador.datos-opcionales-pedido :localidades='$localidades' />
            @endif
            
            <div class="mt-5 bg-gray-700 p-2">
                <h1 class="font-bold text-lg bg-gray-200 text-black">Montos</h1>

                <div class="p-2">
                    <h1 class="font-bold text-md bg-yellow-600 text-black">Subtotal</h1>
                    <b class=" font-semibold text-md">$ {{ Cart::subtotal() }}</b>
                </div>
                <div class="p-2">
                    <h1 class="font-bold text-md bg-yellow-600 text-black">Delivery</h1>
                    <b class=" font-semibold text-md">$ {{$envio}}</b>
                </div>
                <div class="p-2">
                    <h1 class="font-bold text-md bg-yellow-600 text-black">Total</h1>
                    <b class=" font-semibold text-md">$ {{(int)Cart::subtotal()+(int)$envio}}</b>
                </div>
                <div class="">
                    <button type="submit"
                        class="font-bold text-xl bg-gray-100 hover:bg-gray-200 text-black p-2 rounded-xl my-5 cursor-pointer">
                        Realizar pedido
                    </button>
                </div>
            </div>

        </form>

    </div>

</div>
