<div>
    @if (!$pedidos->count())
        <h1 class="text-center font-bold">No hay pedidos por ahora</h1>
    @else
    @foreach ($pedidos as $pedido)
        <x-repartidor.pedido-plantilla :pedido="$pedido" :pedidostates="$pedidostates" />
    @endforeach
    @endif
</div>
