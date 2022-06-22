<?php

namespace App\Http\Controllers;

use App\Models\Perfilpaci;
use Illuminate\Http\Request;

class PerfilpaciController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfilpacis = Perfilpaci::simplePaginate(2);
        return view('Perfilpaci.index', compact('perfilpacis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Perfilpaci.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perfilpaci = new Perfilpaci;
        $perfilpaci->nombres = $request->nombres;
        $perfilpaci->apellidos = $request->apellidos;
        $perfilpaci->sexo = $request->sexo;
        $perfilpaci->edad = $request->edad;
        $perfilpaci->direccion = $request->direccion;
        $perfilpaci->descripcion = $request->descripcion;
        $perfilpaci->save();
        return redirect()->route('perfilpaci.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perfilpaci $perfilpaci
     * @return \Illuminate\Http\Response
     */
    public function show(Perfilpaci $perfilpaci)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfilpaci $perfilpaci
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfilpaci $perfilpaci)
    {
        return view('Perfilpaci.edit', compact('perfilpaci'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perfilpaci $perfilpaci
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Perfilpaci $perfilpaci )
    {
        $perfilpaci->nombres = $request->nombres;
        $perfilpaci->apellidos = $request->apellidos;
        $perfilpaci->sexo = $request->sexo;
        $perfilpaci->edad = $request->edad;
        $perfilpaci->direccion = $request->direccion;
        $perfilpaci->descripcion = $request->descripcion;
        $perfilpaci->save();
        return redirect()->route('perfilpaci.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfilpaci $perfilpaci
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfilpaci $perfilpaci)
    {
        $perfilpaci->delete();
        return redirect()->route('perfilpaci.index');
    }
}
