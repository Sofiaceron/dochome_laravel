<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = Cita::simplePaginate(2);
        return view('Cita.index', compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especialidads = Especialidad ::All();
        return view('Cita.create', compact('especialidads'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cita = new Cita;
        $cita->especialidadId = $request-> especialidadId;
        $cita->doctorId = $request-> doctorId;
        $cita->calendarioId = $request-> calendarioId;
        $cita->save();
        return redirect()->route('cita.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cita $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cita $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Cita $cita)
    {
        return view('Cita.edit', compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cita $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita $cita)
    {
        $cita->especialidadId = $request-> especialidadId;
        $cita->doctorId = $request-> doctorId;
        $cita->calendarioId = $request-> calendarioId;
        $cita->save();
        return redirect()->route('cita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cita $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
        $cita->delete();
        return redirect()->route('cita.index');
    }
}
