<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Models\Localidad;
use App\Models\LocalState;
use App\Models\LocalType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //Se usa para el Dashboard de compradores y visualizar todos los locales
    {        

        $locals =  Local::all();
        $localtypes = LocalType::all();
        $localstates = LocalState::all();
        return view('dashboard', compact('locals', 'localtypes', 'localstates'));
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
            'telefono' => 'required|max:40',
            'sitioweb' => 'required|max:100',
            'calle' => 'required|max:60',
            'edificio' => 'max:45',
            'numero' => 'required|max:6'
            ]);


        $local = new Local();
        $local->name = $request->name;
        $local->telefono = $request->telefono;
        $local->sitioweb = $request->sitioweb;
        $local->calle = $request->calle;
        $local->edificio = $request->edificio;
        $local->numero = $request->numero;
        //logo
        $logo = $request->file('logo')->store('public/logos-locals');
        $url = Storage::url($logo);
        $local->url = $url;
        //localtype
        $local->localtype()->associate(LocalType::where('name', $request->localtype)->first());
        //localidad
        $local->localidad()->associate(Localidad::where('name', $request->localidad)->first());
        //localstate
        $local->localstate()->associate(LocalState::where('name', 'Pendiente')->first());
        //user
        $local->user()->associate(Auth::user());

        $local->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function show(Local $local, $name)
    {
        if (Auth::user()->localidad != null) {
            if ($local->name == $name) {
                if ($local->localstate->name == 'Activo') {
                    return view('shop.local_show', compact('local'));
                } else {
                    return redirect()->route('welcome');
                }
            } return redirect()->back();
            
        } return view('profile.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function edit(Local $local)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Local $local)
    {
        $local->localstate()->associate(LocalState::find($request->localstate));
        $local->save();
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function destroy(Local $local)
    {
        //
    }
}
