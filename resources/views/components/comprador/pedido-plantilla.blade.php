<div>

    <!-- PEDIDO -->
    <div class="relative bg-white p-2 rounded-xl w-full shadow-xl">
        <div class="bg-gray-300 rounded-xl">
            <p class="text-xl font-semibold my-2">{{ $pedido->id }} / {{ $pedido->local->name }}</p>
        </div>
        <div class="text-gray-900 text-sm my-5 justify-center max-h-48">
            <table class="w-full overflow-y-scroll">
                <thead>
                    <th class="bg-gray-700 text-white">Imagen</th>
                    <th class="bg-gray-700 text-white">Nombre</th>
                    <th class="bg-gray-700 text-white">Cantidad</th>
                    <th class="bg-gray-700 text-white">Precio</th>
                </thead>
                <tbody>
                    @foreach (json_decode($pedido->content) as $item)
                        <th> <img src="{{ $item->options->url }}" class="w-8 h-6 rounded-md m-auto" /></th>
                        <th>{{ $item->name }}</th>
                        <th>{{ $item->qty }}</th>
                        <th>$ {{ $item->price }}</th>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="border-t-2"></div>
        <div class="flex justify-center">
            <div class="my-2 mx-2">
                <p class="bg-gray-900 text-white font-semibold text-base mb-2">Estado del pedido</p>
                <div class="text-blue-600 font-semibold">
                    <p>{{ $pedido->pedidostate->name }}</p>
                </div>
            </div>
            <div class="my-2 mx-2">
                <p class="bg-gray-900 text-white font-semibold text-base mb-2">Ultima vez actualizado</p>
                <div class="font-semibold">
                    <p>{{ $pedido->updated_at }}</p>
                </div>
            </div>
        </div>
        <div class="border-t-2"></div>
        <div class="flex justify-center">
            <div class="my-2 mx-2">
                <p class="bg-gray-900 text-white font-semibold text-base mb-2">Datos Adicionales</p>
                <div class="flex justify-center font-semibold">
                    <div class="mx-2">
                        <p class="font-bold">Nombre Receptor</p>
                        <p>{{ $pedido->receptor }}</p>
                    </div>
                    <div class="mx-2">
                        <p class="font-bold">Celular Receptor</p>
                        <p>{{ $pedido->celular_receptor }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>



</div>
