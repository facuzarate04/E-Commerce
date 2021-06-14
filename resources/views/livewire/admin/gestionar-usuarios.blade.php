<div>

    <div class="py-10">

        @if ($action == 'home')
            <table class="border-collapse w-full md:m-auto md:w-auto" wire:loading.class="bg-black opacity-20"
                wire:target="delete">
                <thead>
                    <tr>
                        <th
                            class="p-3 font-bold uppercase bg-gray-800 text-white border border-gray-300 hidden lg:table-cell">
                            ID Local</th>
                        <th
                            class="p-3 font-bold uppercase bg-gray-800 text-white border border-gray-300 hidden lg:table-cell">
                            Estado</th>
                        <th
                            class="p-3 font-bold uppercase bg-gray-800 text-white border border-gray-300 hidden lg:table-cell">
                            Rol</th>
                        <th
                            class="p-3 font-bold uppercase bg-gray-800 text-white border border-gray-300 hidden lg:table-cell">
                            Localidad</th>
                        <th
                            class="p-3 font-bold uppercase bg-gray-800 text-white border border-gray-300 hidden lg:table-cell">
                            Propietario</th>
                        <th
                            class="p-3 font-bold uppercase bg-gray-800 text-white border border-gray-300 hidden lg:table-cell">
                            Fecha Creado</th>
                        <th
                            class="p-3 font-bold uppercase bg-gray-800 text-white border border-gray-300 hidden lg:table-cell">
                            Acciones</th>

                    </tr>

                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr wire:loading.class="bg-black opacity-20" wire:target="update"
                            class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">

                            <td
                                class="w-full lg:w-auto p-3 text-black text-center border border-b block lg:table-cell relative lg:static font-semibold">
                                <span
                                    class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">ID
                                    Local</span>
                                {{ $user->id }}
                            </td>
                            <td
                                class="w-full lg:w-auto p-3 text-black text-center border border-b text-center block lg:table-cell relative lg:static font-bold bg-gray-300">
                                <span
                                    class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Estado</span>
                                {{ $user->name }}
                            </td>
                            <td
                                class="w-full lg:w-auto p-3 text-black text-center border border-b text-center block lg:table-cell relative lg:static font-bold bg-gray-300">
                                <span
                                    class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Estado</span>
                                {{ $user->role_id }}
                            </td>
                            <td
                                class="w-full lg:w-auto p-3 text-black text-center border border-b text-center block lg:table-cell relative lg:static font-semibold">
                                <span
                                    class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Localidad</span>
                                    @if(!$user->localidad)
                                    -
                                    @else
                                    {{$user->localidad->name}}
                                    @endif
                            </td>
                            <td
                                class="w-full lg:w-auto p-3 text-black text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span
                                    class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">PROPIETARIO</span>
                                    @if(!$user->local)
                                    -
                                    @else
                                    {{$user->local->name}}
                                    @endif
                            </td>
                            <td
                                class="w-full lg:w-auto p-3 text-black text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span
                                    class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Cant
                                    Pedidos</span>
                                {{ $user->created_at }}
                            </td>
                            <td
                                class="w-full lg:w-auto p-3 text-black text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span
                                    class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Acciones</span>

                                <button wire:click="show({{ $user }})"
                                    class="text-blue-400 hover:text-blue-600 underline px-2 font-bold">Ver</button>
                                <button wire:click="delete({{ $user }})"
                                    class="text-red-400 hover:btextred-600 underline px-2 font-bold">Eliminar</button>

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        @if ($action == 'show')
            {{ $user->name }}
        @endif

    </div>



</div>
