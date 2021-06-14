<div class="absolute inset-0 ">

    <!-- component -->
    <div class="fixed w-full py-10 items-center bg-gray-500 antialiased min-h-screen">
        <div class="flex flex-col  sm:w-5/6 lg:w-3/4  mx-auto rounded-lg border border-gray-300 shadow-xl">
            <div
                class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
                <p class="font-semibold bg-gray-800 px-5 text-white text-xl">NroPedido: <b
                        class="">{{ $pedido->id }}</b></p>
                <button wire:click="$set('show',0)" class="cursor-pointer">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <form action="{{ route('update.pedido',$pedido) }}" method="POST">
                @csrf
                <!-- PEDIDO -->
                <div class="flex">
                    <div class="relative bg-gray-200 p-2 w-1/2">
                        <div class="bg-gray-400 rounded-xl">
                            <p class="text-xl font-semibold my-2">Detalle</p>
                        </div>
                        <div
                            class="grid grid-cols-4 gap-y-2 text-black text-sm my-5  border border-black overflow-y-scroll">
                            <p class="col-span-1 bg-gray-700 text-white border border-black">Imagen</p>
                            <p class="col-span-1 bg-gray-700 text-white border border-black">Nombre</p>
                            <p class="col-span-1 bg-gray-700 text-white border border-black">Cantidad</p>
                            <p class="col-span-1 bg-gray-700 text-white border border-black">Precio Unit</p>
                            @foreach (json_decode($pedido->content) as $item)
                                <img src="{{ $item->options->url }}" class="span-1 w-8 h-6 rounded-md m-auto " />
                                <p class="col-span-1 m-auto ">{{ $item->name }}</p>
                                <p class="col-span-1 m-auto ">{{ $item->qty }}</p>
                                <p class="col-span-1 m-auto ">$ {{ $item->price }}</p>
                            @endforeach
                            <p class="col-span-2 bg-gray-700 text-white border border-black">Monto Total:</p>
                            <p class="col-span-2 bg-gray-700 text-white border border-black">$ {{$pedido->monto_total}}</p>
                        </div>
                        <div class="border-t-2"></div>
                        <div class="bg-gray-400 rounded-xl">
                            <p class="text-xl font-semibold my-2">Estados y Fechas</p>
                        </div>
                        <div class="flex justify-center">
                            <div class="my-2 mx-2 border border-black">
                                <p class="bg-gray-700 text-white px-2 font-semibold text-base mb-2">Estado del
                                    pedido</p>
                                <div class="font-bold py-1">
                                    <select name="pedidostate" class="text-sm">
                                        <option value="{{ $pedido->pedidostate->name }}" hidden>
                                            {{ $pedido->pedidostate->name }}</option>
                                        @foreach ($pedidostates as $pedidostate)
                                            <option value="{{ $pedidostate->name }}">{{ $pedidostate->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="my-2 mx-2 border border-black ">
                                <p class="bg-gray-700 text-white px-2 font-semibold text-base mb-2">Ultima vez
                                    actualizado</p>
                                <div class="font-semibold py-1">
                                    <p>{{ $pedido->updated_at }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative bg-gray-200 p-2 w-1/2">
                        <div class="bg-gray-400 rounded-xl">
                            <p class="text-xl font-semibold my-2">Datos del Cliente</p>
                        </div>
                        <div
                            class="grid grid-cols-3 gap-y-2 text-black text-sm my-5 justify-center border border-black overflow-hidden">
                            <p class="col-span-1 bg-gray-700 text-white border border-black">Nombre</p>
                            <p class="col-span-1 bg-gray-700 text-white border border-black">Celular</p>
                            <p class="col-span-1 bg-gray-700 text-white border border-black">Mail</p>
                            <p class="col-span-1 m-auto font-bold">{{ $pedido->user->name }}</p>
                            <p class="col-span-1 m-auto ">{{ $pedido->user->celular }}</p>
                            <p class="col-span-1 m-auto ">{{ $pedido->user->email }}</p>
                        </div>
                        <div
                            class="grid grid-cols-3 gap-y-2 text-black text-sm my-5 justify-center border border-black overflow-hidden">
                            <p class="col-span-1 bg-gray-700 text-white border border-black">Localidad</p>
                            <p class="col-span-1 bg-gray-700 text-white border border-black">Calle</p>
                            <p class="col-span-1 bg-gray-700 text-white border border-black">Numero</p>
                            <p class="col-span-1 m-auto ">{{ $pedido->user->localidad->name }}</p>
                            <p class="col-span-1 m-auto ">{{ $pedido->user->calle }}</p>
                            <p class="col-span-1 m-auto ">{{ $pedido->user->numero }}</p>
                        </div>
                        <div class="border-t-2"></div>
                        <div class="bg-gray-400 rounded-xl">
                            <p class="text-xl font-semibold my-2">Datos Adicionales</p>
                        </div>
                        <div
                            class="grid grid-cols-2 gap-y-2 text-black text-sm my-5 justify-center border border-black overflow-hidden">
                            <p class="col-span-1 bg-gray-700 text-white border border-black">Receptor</p>
                            <p class="col-span-1 bg-gray-700 text-white border border-black">Celular</p>
                            <p class="col-span-1 m-auto">{{$pedido->receptor}}</p>
                            <p class="col-span-1 m-auto">{{$pedido->celular_receptor}}</p>
                        </div>
                    </div>

                </div>

                <div class=" p-5 bg-white border-t border-gray-200 rounded-bl-lg rounded-br-lg">
                    <button type="submit" class="m-auto px-4 py-2 text-white font-semibold bg-blue-500 rounded">
                        Guardar Cambios
                    </button>
                </div>
            </form>
        </div>
    </div>



</div>
