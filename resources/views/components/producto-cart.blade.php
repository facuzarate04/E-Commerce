<div>
    
    <!-- component -->
    <div class="w-full md:mx-auto max-w-6xl rounded bg-gray-100 shadow-xl p-2 mx-auto text-gray-800 relative md:text-left mb-5">
                
        <div class="md:flex items-center -mx-10">
            <div class="w-full md:w-1/3 px-10 mb-5 md:mb-0">
                <div class=" mx-auto">
                    <img src="{{ $producto->options->url}}" class=" h-28 md:h-36 w-full m-auto" alt="">
                </div>
            </div>
            <div class="w-full md:flex-1 px-10 md:px-2">
                <div class="w-3/4">
                    <div class=" mb-1 md:flex text-left">
                        <h1 class="font-bold uppercase text-xl my-auto">{{ $producto->name }}</h1>
                        <b class="mx-2 hidden md:block">-</b>
                        <h1 class="font-semibold text-md my-auto">{{ $producto->options->local }}</h1>  
                    </div>

                    <textarea class="w-full text-sm border-transparent bg-transparent" rows="2"
                        readonly>{{ $producto->options->descripcion }}</textarea>
                </div>
                <div class="flex ">
                    <div class="">
                        <div class="inline-block align-bottom mr-5">
                            <span class="text-xl leading-none align-baseline">$</span>
                            <span class="font-bold text-xl leading-none align-baseline">{{ $producto->price }}</span>
                        </div> 
                        <div class="inline-block align-bottom mr-5">
                            <span class="text-xl leading-none align-baseline">Cantidad: </span>
                            <span class="font-bold text-xl leading-none align-baseline">{{ $producto->qty }}</span>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</div>