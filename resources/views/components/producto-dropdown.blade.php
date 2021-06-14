<div>
    <!-- component -->
    <div class="w-full md:mx-auto max-w-6xl rounded bg-gray-100 shadow-xl p-1 mx-auto text-gray-800 relative md:text-left">
                
        <div class="flex items-center ">
            <div class="w-1/3 mb-5 md:mb-0">
                <div class=" mx-auto">
                    <img src="{{ $producto->options->url}}" class=" h-20 md:h-20 w-full m-auto" alt="">
                </div>
            </div>
            <div class="flex-1 px-10 md:px-2">
                <div class="w-3/4">
                    <h1 class="font-bold uppercase text-md my-auto">{{ $producto->name }}</h1>
                </div>
                <div class="flex ">
                    <div class="">
                        <div class="inline-block align-bottom mr-5">
                            <span class="text-md leading-none align-baseline">$</span>
                            <span class="font-bold text-md leading-none align-baseline">{{ $producto->price }}</span>
                        </div> 
                        <div class="inline-block align-bottom mr-5">
                            <span class="text-md leading-none align-baseline">Cantidad: </span>
                            <span class="font-bold text-md leading-none align-baseline">{{ $producto->qty }}</span>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>