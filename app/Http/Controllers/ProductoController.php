<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\ProductoState;
use App\Models\ProductoType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
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
        //
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
            'logo' => 'required|image|max:2048',
            'name' => 'required|max:60',
            'precio' => 'required|max:5',
            'descripcion' => 'required|max:150',
            'state' => 'required',
            'type' => 'required',
            ]);

        $producto = new Producto();
        $producto->name = $request->name;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        //productostate
        $producto->productostate()->associate(ProductoState::where('name', $request->state)->first());
        //productotype
        $producto->productotype()->associate(ProductoType::where('name',$request->type)->first());
        //user
        $producto->local()->associate(Auth::user()->local)->first();
         //logo
        $logo = $request->file('logo')->store('public/logos-productos');
        $url = Storage::url($logo);
        $producto->url = $url;

        $producto->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        
        $request->validate([
            'name' => 'required|max:60',
            'precio' => 'required|max:5',
            'descripcion' => 'required|max:150',
            'state' => 'required',
            'type' => 'required',
            ]);

        $producto->name = $request->name;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        //productostate
        $producto->productostate()->associate(ProductoState::where('name', $request->state)->first());
        //productotype
        $producto->productotype()->associate(ProductoType::where('name',$request->type)->first());
        //logo
        if($request->logo != null){
        $request->validate(['logo' => 'required|image|max:2048']);
        $logo = $request->file('logo')->store('public/logos-productos');
        $url = Storage::url($logo);
        $producto->url = $url;
        }
        $producto->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
