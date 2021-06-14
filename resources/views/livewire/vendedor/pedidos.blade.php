<div class="py-10">

    @if ($pedidos->count())

        <table class="border-collapse w-full md:m-auto md:w-auto" wire:loading.class="bg-black opacity-20"
            wire:target="delete">
            <thead>
                <tr>
                    <th
                        class="p-3 font-bold uppercase bg-gray-800 text-white border border-gray-300 hidden lg:table-cell">
                        Nro Pedido</th>
                    <th
                        class="p-3 font-bold uppercase bg-gray-800 text-white border border-gray-300 hidden lg:table-cell">
                        Estado</th>
                    <th
                        class="p-3 font-bold uppercase bg-gray-800 text-white border border-gray-300 hidden lg:table-cell">
                        Cliente</th>
                    <th
                        class="p-3 font-bold uppercase bg-gray-800 text-white border border-gray-300 hidden lg:table-cell">
                        Fecha Recibido</th>
                    <th
                        class="p-3 font-bold uppercase bg-gray-800 text-white border border-gray-300 hidden lg:table-cell">
                        Monto Total</th>
                    <th
                        class="p-3 font-bold uppercase bg-gray-800 text-white border border-gray-300 hidden lg:table-cell">
                        Acciones</th>

                </tr>

            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                    <tr wire:loading.class="bg-black opacity-20" wire:target="update"
                        class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">

                        <td
                            class="w-full lg:w-auto p-3 text-black text-center border border-b block lg:table-cell relative lg:static font-semibold">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Nro
                                Pedido</span>
                            {{ $pedido->id }}
                        </td>
                        <td
                            class="w-full lg:w-auto p-3 text-black text-center border border-b text-center block lg:table-cell relative lg:static font-bold bg-gray-400">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Estado</span>
                            {{ $pedido->pedidostate->name }}
                        </td>
                        <td
                            class="w-full lg:w-auto p-3 text-black text-center border border-b block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Cliente</span>
                            {{ $pedido->user->name }}
                        </td>
                        <td
                            class="w-full lg:w-auto p-3 text-black text-center border border-b block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Fecha
                                Recibido</span>
                            {{ $pedido->created_at }}
                        </td>
                        <td
                            class="w-full lg:w-auto p-3 text-black text-center border border-b text-center block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Monto Total</span>
                            $ {{ $pedido->monto_total }}
                        </td>
                        <td
                            class="w-full lg:w-auto p-3 text-black text-center border border-b text-center block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Acciones</span>

                            <button wire:click="show({{ $pedido }})"
                                class="text-black bg-blue-400 hover:bg-blue-600 rounded-xl p-1 px-4 font-bold">Ver</button>

                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>


        <!-- Editar un producto -->

        @if ($show == 1)
            <x-vendedor.pedido-plantilla :pedido="$pedidoedit" :pedidostates="$pedidostates" />
        @endif





    @else
        NO HAY PEDIDOS EN TU LOCAL
    @endif


</div>
