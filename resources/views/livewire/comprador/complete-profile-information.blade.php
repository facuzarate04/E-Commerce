<div class="md:grid md:grid-cols-3 md:gap-6">

    <x-jet-section-title>
        <x-slot name="title">Información Personal.</x-slot>
        <x-slot name="description">
            Modifica y actualiza tu email y contraseña actual. <br>
            Recuerda que es obligatorio actualizar y completar todos tus datos, para poder realizar pedidos.
        </x-slot>
    </x-jet-section-title>



    <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="{{ route('user.update') }}" method="POST">
            @csrf
            <div class="px-4 py-5 bg-white sm:p-6 shadow {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                <div class="grid grid-cols-6 gap-6">
                    <!-- Celular -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="celular" value="{{ __('Celular') }}" />
                        <x-jet-input name="celular" id="celular" type="number" onKeyPress="if(this.value.length>24) return false;" class="mt-1 block w-full" value="{{Auth::user()->celular}}" required/>
                        <x-jet-input-error for="email" class="mt-2" />
                    </div>
                    <!-- Localidad -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="localidad" value="{{ __('Localidad') }}" />
                        <select name="localidad" id="" class="mt-1 block w-full rounded" >
                            @foreach($localidades as $localidad)
                            <option value="{{$localidad->name}}">{{$localidad->name}}</option>
                            @endforeach
                        </select>
                        <x-jet-input-error for="name" class="mt-2" />
                    </div>
                    <!-- Calle -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="calle" value="{{ __('Calle') }}" />
                        <x-jet-input name="calle" id="calle" type="text" class="mt-1 block w-full" value="{{Auth::user()->calle}}" required/>
                        <x-jet-input-error for="email" class="mt-2" />
                    </div>
                    <!-- Numero -->
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label for="numero" value="{{ __('N° Calle') }}" />
                        <x-jet-input name="numero" id="numero" type="number" onKeyPress="if(this.value.length>5) return false;" class="mt-1 block full" value="{{Auth::user()->numero}}" required/>
                        <x-jet-input-error for="email" class="mt-2" />
                    </div>
                    
                </div>
            </div>

           
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
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











