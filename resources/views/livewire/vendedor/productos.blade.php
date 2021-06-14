<div class="py-10">

    <!-- Table de productos -->

    <button wire:click="$set('action', 'create')"
        class=" bg-gray-800 text-white rounded-xl p-2 my-5 hover:bg-gray-900">+ Agregar Nuevo</button>

    <table class="border-collapse w-full md:m-auto md:w-auto" wire:loading.class="bg-black opacity-20"
        wire:target="delete">
        <thead>
            <tr>
                <th class="p-3 font-bold uppercase bg-gray-800 text-white border border-gray-300 hidden lg:table-cell">
                    Nombre</th>
                <th class="p-3 font-bold uppercase bg-gray-800 text-white border border-gray-300 hidden lg:table-cell">
                    Precio</th>
                <th class="p-3 font-bold uppercase bg-gray-800 text-white border border-gray-300 hidden lg:table-cell">
                    Estado</th>
                <th class="p-3 font-bold uppercase bg-gray-800 text-white border border-gray-300 hidden lg:table-cell">
                    Tipo</th>
                <th class="p-3 font-bold uppercase bg-gray-800 text-white border border-gray-300 hidden lg:table-cell">
                    Fecha/Hora update</th>
                <th class="p-3 font-bold uppercase bg-gray-800 text-white border border-gray-300 hidden lg:table-cell">
                    Acciones</th>

            </tr>

        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr wire:loading.class="bg-black opacity-20" wire:target="update"
                    class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">

                    <td
                        class="w-full lg:w-auto p-3 text-black text-center border border-b block lg:table-cell relative lg:static font-semibold">
                        <span
                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Nombre</span>
                        {{ $producto->name }}
                    </td>
                    <td
                        class="w-full lg:w-auto p-3 text-black text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span
                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Precio</span>
                        $ {{ $producto->precio }}
                    </td>
                    <td
                        class="w-full lg:w-auto p-3 text-black text-center border border-b block lg:table-cell relative lg:static font-semibold">
                        <span
                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-semibold uppercase">Estado</span>
                        {{ $producto->productostate->name }}
                    </td>
                    <td
                        class="w-full lg:w-auto p-3 text-black text-center border border-b block lg:table-cell relative lg:static font-semibold">
                        <span
                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-semibold uppercase">Tipo</span>
                        {{ $producto->productotype->name }}
                    </td>
                    <td
                        class="w-full lg:w-auto p-3 text-black text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span
                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Fecha/Hora
                            Update</span>
                        {{ $producto->updated_at }}
                    </td>
                    <td
                        class="w-full lg:w-auto p-3 text-black text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span
                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Acciones</span>

                        <button wire:click="edit({{ $producto }})"
                            class="text-blue-400 hover:text-blue-600 underline px-1 font-bold">Editar</button>
                        <button wire:click="delete({{ $producto }})"
                            class="text-red-400 hover:text-red-600 underline px-1 font-bold">Eliminar</button>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>




    <!-- Crear un producto -->

    @if ($action == 'create')

        <x-vendedor.create-producto :productostate='$productostate' :productotype='$productotype' />


    @endif

    <!-- Editar un producto -->

    @if ($action == 'edit')

        <x-vendedor.edit-producto :productoedit='$productoedit' :productostate='$productostate'
            :productotype='$productotype' />

    @endif





</div>
