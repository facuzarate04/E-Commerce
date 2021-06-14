<div>
    <div  class="w-full md:w-3/4 md:mx-auto max-w-6xl rounded bg-gray-100 shadow-xl p-2 mx-auto text-gray-800 relative md:text-left mb-5">
                
        <div class="md:flex items-center">
            <div class="w-full md:w-1/3 px-1 mb-5 md:mb-0">
                <div class=" mx-auto">
                    <img src="{{ $producto->url}}" class=" h-28 md:h-36 w-full m-auto" alt="">
                </div>
            </div>
            <div class="w-full md:flex-1 md:px-2">
                <div class="md:w-3/4">
                    <h1 class="font-bold uppercase text-xl mb-1">{{ $producto->name }}</h1>
                    <textarea class="w-full text-sm border-transparent bg-transparent" rows="2"
                        readonly>{{ $producto->descripcion }}</textarea>
                </div>
                <div class="md:flex">
                        <div class="inline-block align-bottom mr-5">
                            <span class="text-xl leading-none align-baseline">$</span>
                            <span
                                class="font-bold text-xl leading-none align-baseline">{{ $producto->precio }}</span>
                        </div>
                        <div class="inline-block align-bottom">
                            <button wire:click="addItem({{$producto}})" 
                                class="bg-gray-900 opacity-90 hover:opacity-100 text-gray-100 hover:text-white rounded-full px-5 py-1 font-semibold"><i
                                    class="mdi mdi-cart -ml-2 mr-2"></i> AGREGAR</button>
                        </div>
                </div>
            </div>
        </div>
        
    </div>
</div>