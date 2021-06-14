<div>
    <div class="bg-gray-700 p-2">
       
        <div class="p-2 md:px-10">
            <label for="receptor" class="w-full text-sm">Nombre del Receptor del pedido</label>
            <input class="w-full rounded text-black text-sm" type="text" name="receptor">
        </div>
        <div class="p-2 md:px-10">
            <label for="celular_receptor" class="w-full text-sm">Celular del Receptor</label>
            <input class="w-full rounded text-black text-sm" type="text" name="celular_receptor">
        </div>
        <div class="p-2 md:px-10">
            <label for="localidad" class="w-full text-sm">Localidad</label>
            <select wire:model="localidad" name="localidad" class="w-full rounded text-black text-sm">
                @foreach($localidades as $localidad)
                <option value="{{$localidad->id}}">{{$localidad->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="p-2 md:px-10">
            <label for="domicilio" class="w-full text-sm">Domicilio / Ubicación de recepción</label>
            <textarea class="w-full rounded text-black text-sm" name="domicilio" class="w-full"  rows="2"></textarea>
        </div>
    </div>

</div>