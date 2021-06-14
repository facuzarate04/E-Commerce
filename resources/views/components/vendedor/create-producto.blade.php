<div>
    
    <div class="fixed inset-0 overflow-hidden" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">

        <div class="absolute inset-0 bg-gray-900 bg-opacity-90 transition-opacity" aria-hidden="true"></div>
        <div class="fixed inset-y-0 right-0 pl-10 max-w-full flex">
            <div class="relative w-screen max-w-lg">
                <div class="absolute top-0 left-0 -ml-8 pt-4 pr-2 flex sm:-ml-10 sm:pr-4">
                    <button wire:click="$set('action', '')"
                        class="rounded-md text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                        <span class="sr-only">Close panel</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="h-full flex flex-col py-6 bg-white shadow-xl overflow-y-scroll">
                    <div class="px-4 sm:px-6">
                        <h2 class="text-lg font-bold text-white bg-gray-900" id="slide-over-title">
                            Crear un nuevo producto
                        </h2>
                    </div>
                    <div class="mt-6 relative flex-1 px-4 sm:px-6">
                        <div class="absolute inset-0 px-4 sm:px-6">
                            <div class="bg-yellow-600 border-2 border-solid border-gray-600 py-5 px-2"
                                aria-hidden="true">
                                <form action="{{ route('crear.producto') }}" method="POST"
                                    enctype="multipart/form-data">
                                    <x-jet-validation-errors class="mb-4" />
                                    @csrf
                                    <label for="name" class="bg-gray-900 text-white w-full mb-2 px-2">Nombre</label>
                                    <input type="text" name="name" class="w-full mb-2" required>
                                    <label for="name" class="bg-gray-900 text-white w-full mb-2 px-2">Precio</label>
                                    <input type="number" name="precio" class="w-full mb-2" required>
                                    <label for="name"
                                        class="bg-gray-900 text-white w-full mb-2 px-2">Descripcion</label>
                                    <textarea name="descripcion" id="" cols="2" rows="3" class="w-full mb-2"
                                        required></textarea>
                                    <label for="name" class="bg-gray-900 text-white w-full mb-2 px-2">Visibilidad
                                        del producto para los usuarios</label>
                                    <select name="state" class="w-full mb-2" required>
                                        @foreach ($productostate as $state)
                                            <option value="{{ $state->name }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                    <label for="name" class="bg-gray-900 text-white w-full mb-2 px-2">Categoría /
                                        Tipo</label>
                                    <select name="type" class="w-full mb-2" required>
                                        @foreach ($productotype as $tipo)
                                            <option value="{{ $tipo->name }}">{{ $tipo->name }}</option>
                                        @endforeach
                                    </select>
                                    <label for="name" class="bg-gray-900 text-white w-full mb-2 px-2">Imagen del producto</label>
                                    <input type="file" name="logo" class="w-full mb-2" accept="image/*">

                                    <button type="submit"
                                        class=" mt-4 m-auto bg-green-500 hover:bg-green-600 px-2 rounded-xl">GUARDAR</button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>