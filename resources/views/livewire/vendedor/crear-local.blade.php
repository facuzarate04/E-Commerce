<div class="flex-1 p-10">

    <div class="md:grid md:grid-cols-3 md:gap-6">

        <x-jet-section-title>
            <x-slot name="title">Información de tu local.</x-slot>
            <x-slot name="description">
                Ingresa los datos de tu local. <br>
                Los campos que posean un <b>*</b>, son campos <b>obligatorios</b>.
            </x-slot>
        </x-jet-section-title>
        <x-jet-validation-errors class="mb-4" />
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{ route('crear.local') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div
                    class="px-4 py-5 bg-white sm:p-6 shadow {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                    <div class="grid grid-cols-6 gap-6">
                        <!-- Name -->
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="name" value="{{ __('Nombre del local *') }}" />
                            <x-jet-input name="name" id="name" type="text" class="mt-1 block w-full" autocomplete="name" required/>

                        </div>
                        <!-- Tipo -->
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="localtype" value="{{ __('Tipo de local *') }}" />
                            <select name="localtype" id=""
                                class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"required>
                                @foreach ($localtypes as $localtype)
                                    <option value="{{ $localtype->name }}">{{ $localtype->name }}</option>
                                @endforeach
                            </select>
                        </div>

                         <!-- Localidad -->
                         <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="localidad" value="{{ __('Localidad *') }}" />
                            <select name="localidad" id=""
                                class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"required>
                                @foreach ($localidades as $localidad)
                                    <option value="{{ $localidad->name }}">{{ $localidad->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Telefono -->
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="telefono" value="{{ __('Número de telefono / celular *') }}" />
                            <x-jet-input name="telefono" id="" type="text" class="mt-1 block w-full" required/>

                        </div>
                        <!-- Sitio web -->
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="sitioweb" value="{{ __('Sitio Web') }}" />
                            <x-jet-input name="sitioweb" id="" type="text" class="mt-1 block w-full" />

                        </div>
                        <!-- Calle -->
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="calle" value="{{ __('Calle *') }}" />
                            <x-jet-input name="calle" id="" type="text" class="mt-1 block w-full" required/>

                        </div>
                        <!-- Edificio -->
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="edificio" value="{{ __('Edificio') }}" />
                            <x-jet-input name="edificio" id="" type="text" class="mt-1 block w-full" />

                        </div>
                        <!-- Numero -->
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="numero" value="{{ __('Numero *') }}" />
                            <x-jet-input name="numero" id="" type="number" class="mt-1 block w-full" required/>

                        </div>
                        <!-- Logo -->
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="logo" value="{{ __('Logo de tu local *') }}" />
                            <input type="file" name="logo" id=""class="mt-1 block w-full" accept="image/*" required/>
                        </div>

                    </div>
                </div>

                <div
                    class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <x-jet-action-message class="mr-3" on="saved">
                        {{ __('Guardado.') }}
                    </x-jet-action-message>

                    <x-jet-button>
                        {{ __('Guardar') }}
                    </x-jet-button>
                </div>



            </form>
        </div>



    </div>


</div>
