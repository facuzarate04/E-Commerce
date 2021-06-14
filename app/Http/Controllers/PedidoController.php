<?php

namespace App\Http\Controllers;

use App\Models\Envio;
use App\Models\Local;
use App\Models\Localidad;
use App\Models\Pedido;
use App\Models\PedidoState;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pedido = new Pedido();
        return view('shop.pedido', compact('pedido'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'celular_receptor' =>'max:30',
            'receptor' =>'max:60',
            'domicilio' =>'max:100',
        ]);

        if (Cart::content()->count()) {
            $pedido = new Pedido();
            $pedido->user()->associate(Auth::user());
            $pedido->pedidostate()->associate(PedidoState::where('id', '1')->first());
            $pedido->receptor = $request->receptor;
            $pedido->celular_receptor = $request->celular_receptor;
            $pedido->domicilio = $request->domicilio;            
            //Busco el local por productos del carrito
            foreach (Cart::content() as $local) {
            } //Necesito del foreach porque el Cart es un array
            $local = Local::where('name', $local->options->local)->first();
            $pedido->local()->associate($local);

            //Asociación del Envío
            if($request->localidad != null){
                $origen = Localidad::find($local->localidad->id);
                $destino = Localidad::find($request->localidad);
                $envio = Envio::where('origen',$origen->id)->where('destino',$destino->id)->first();
                $pedido->envio()->associate($envio);
            }else{
                $origen = Localidad::find($local->localidad->id);
                $destino = Localidad::find(Auth::user()->localidad->id);
                $envio = Envio::where('origen',$origen->id)->where('destino',$destino->id)->first();
                $pedido->envio()->associate($envio);
            }

            $pedido->content = Cart::content();
            $pedido->monto_total = Cart::subtotal() + $envio->monto;

            $pedido->save();

            Cart::destroy();

            return redirect()->route('redirect');
        }
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        $pedido->pedidostate()->associate(PedidoState::where('name', $request->pedidostate)->first());
        $pedido->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        //
    }

    public function pendientes(){
        
    }

}
