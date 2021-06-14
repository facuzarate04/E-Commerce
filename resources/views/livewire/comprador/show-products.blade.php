<div class="bg-yellow-600 p-10 md:px-0">
    <h1 class="m-auto font-bold text-3xl mb-10 text-black">Productos</h1>


    <div class="md:grid grid-cols-2 gap-4">
        @foreach ($productos as $producto)
            <div class="md:col-span-1">
                <x-producto-plantilla :producto='$producto' />
            </div>            
        @endforeach
    </div>
    {{ $productos->links() }}

</div>
