<div>
    <!-- component -->
    <div class=" w-full items-center antialiased ">
        <div class="flex flex-col  sm:w-5/6 lg:w-3/4 p-1  mx-auto rounded-lg shadow-xl">
            <div
                class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
                <p class="font-semibold bg-gray-800 px-5 text-white text-xl">Nro Local <b
                        class="">{{ $local->id }}</b></p>
                <p class="font-semibold bg-gray-800 px-5 text-white text-xl mx-auto">
                    {{ $local->name }}</p>
                <button wire:click="$set('action','home')" class="cursor-pointer">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <form action="{{ route('update.local', $local) }}" method="POST">
                @csrf
                <!-- PEDIDO -->
                <div class="flex">
                    <div class="relative bg-gray-200 p-2 w-full">

                        <div class="grid grid-cols-4  gap-2">

                            <div class="bg-gray-500 p-1 col-span-4">
                                <label for="imagen" class="w-full m-auto col-span-2 font-bold">Imagen</label>
                                <img src="{{ $local->url }}" class=" m-auto col-span-2 w-48 h-20">
                            </div>
                            <div class="bg-gray-500 p-1 col-span-2">
                                <label for="imagen" class=" w-full m-auto col-span-1 font-bold">Tipo de Local</label>
                                <input type="text" class="w-full m-auto col-span-1" value="{{ $local->localtype->name }}"
                                    readonly>
                            </div>
                            <div class="bg-gray-500 p-1 col-span-2">
                                <label for="imagen" class=" w-full m-auto col-span-1 font-bold">Cant Productos</label>
                                @if (!$local->producto)
                                    <input type="text" class="w-full m-auto col-span-1"
                                        value="{{ $local->producto->count() }}" readonly>
                                @else
                                    -
                                @endif
                            </div>
                            <div class="bg-gray-500 p-1 col-span-2">
                                <label for="imagen" class=" w-full m-auto col-span-1 font-bold">Tipo de Local</label>
                                <input type="text" class="w-full m-auto col-span-1" value="{{ $local->localtype->name }}"
                                    readonly>
                            </div>
                            <div class="bg-gray-500 p-1 col-span-2">
                                <label for="imagen" class="w-full m-auto col-span-1 font-bold">Tipo de Local</label>
                                <input type="text" class="w-full m-auto col-span-1" value="{{ $local->localtype->name }}"
                                    readonly>
                            </div>
                            <div class="bg-gray-500 p-1 col-span-4">
                                <label for="imagen" class="w-full m-auto col-span-1 font-bold">Estado del Local</label>
                                <select name="localstate" class="m-auto w-1/2">
                                    <option value="{{$local->localstate->id}}"hidden>{{$local->localstate->name}}</option>
                                    @foreach ($localstates as $localstate)
                                    <option value="{{$localstate->id}}">{{$localstate->name}}</option>
                                    @endforeach
                                </select>
                            </div>

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
