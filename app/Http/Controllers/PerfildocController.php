<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use App\Models\Perfildoc;
use Illuminate\Http\Request;

class PerfildocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfildocs = Perfildoc::simplePaginate(2);
        return view('Perfildoc.index', compact('perfildocs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especialidads = Especialidad ::All();
        return view('Perfildoc.create', compact('especialidads'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perfildoc = new Perfildoc;
        $perfildoc->correo_electronico = $request->correo_electronico;
        $perfildoc->password = $request->password;
        $perfildoc->idEspecializacion = $request->idEspecializacion;
        $perfildoc->whatsApp = $request->whatsApp ;
        $perfildoc->save();
        return redirect()->route('perfildoc.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perfildoc $perfildoc
     * @return \Illuminate\Http\Response
     */
    public function show(Perfildoc $perfildoc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfildoc $perfildoc
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfildoc $perfildoc)
    {
        return view('Perfildoc.edit', compact('perfildoc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perfildoc $perfildoc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfildoc $perfildoc)
    {
        $perfildoc->correo_electronico = $request->correo_electronico;
        $perfildoc->password = $request->password;
        $perfildoc->idEspecializacion = $request->idEspecializacion;
        $perfildoc->whatsApp = $request->whatsApp ;
        $perfildoc->save();
        return redirect()->route('perfildoc.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfildoc $perfildoc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfildoc $perfildoc)
    {
        $perfildoc->delete();
        return redirect()->route('perfildoc.index');
    }
}
