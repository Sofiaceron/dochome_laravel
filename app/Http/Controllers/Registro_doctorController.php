<?php

namespace App\Http\Controllers;

use App\Models\Registro_doctor;
use Illuminate\Http\Request;

class Registro_doctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registro_doctors = Registro_doctor::simplePaginate(2);
        return view('Registro_doctor.index', compact('registro_doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Registro_doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registro_doctor = new Registro_doctor;
        $registro_doctor->nombres = $request->nombres;
        $registro_doctor->apellidos = $request->apellidos;
        $registro_doctor->sexo = $request->sexo;
        $registro_doctor->cedula = $request->cedula;
        $registro_doctor->fecha_expedicion = $request->fecha_expedicion;
        $registro_doctor->telefono = $request->telefono;
        $registro_doctor->fcopia_cedula = $request->fcopia_cedula;
        $registro_doctor->fcopia_acta_certificacion = $request->fcopia_acta_certificacion;
        $registro_doctor->fcopia_diploma = $request->fcopia_diploma;
        $registro_doctor->save();
        return redirect()->route('registro_doctor.create');
    }

    /**
     * Display the specified resource.
     *
     *@param  \App\Models\Registro_doctor $registro_doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Registro_doctor $registro_doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registro_doctor $registro_doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro_doctor $registro_doctor)
    {
        return view('Registro_doctor.edit', compact('registro_doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registro_doctor $registro_doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro_doctor $registro_doctor)
    {
        $registro_doctor->nombres = $request->nombres;
        $registro_doctor->apellidos = $request->apellidos;
        $registro_doctor->sexo = $request->sexo;
        $registro_doctor->cedula = $request->cedula;
        $registro_doctor->fecha_expedicion = $request->fecha_expedicion;
        $registro_doctor->telefono = $request->telefono;
        $registro_doctor->fcopia_cedula = $request->fcopia_cedula;
        $registro_doctor->fcopia_acta_certificacion = $request->fcopia_acta_certificacion;
        $registro_doctor->fcopia_diploma = $request->fcopia_diploma;
        $registro_doctor->save();
        return redirect()->route('registro_doctor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registro_doctor $registro_doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro_doctor $registro_doctor)
    {
        $registro_doctor->delete();
        return redirect()->route('registro_doctor.index');
    }
}
