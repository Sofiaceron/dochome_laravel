@extends('Template.Template')
@section('plantillaweb')
    <h2>Formulario edicion de perfil pacientes</h2>

    <form action="{{ route('perfilpaci.update', $perfilpaci) }}" method="post">
        @method('PUT')
        {{ csrf_field() }}
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>Nombres:</label>
            <input type="text" name="nombres" value="{{ $perfilpaci->nombres }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>Apellidos:</label>
            <input type="text" name="apellidos" value="{{ $perfilpaci->apellidos }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label for="cars">Sexo:</label>
            <input type="selec" name="sexo" value="{{ $perfilpaci->sexo }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <label>Edad:</label>
            <input type="int" name="edad" value="{{ $perfilpaci->edad }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <label>Dirección:</label>
            <input type="text" name="direccion" value="{{ $perfilpaci->direccion }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <label>Descripción:</label>
            <input type="lobgtext" name="descripcion" value="{{ $perfilpaci->descripcion }}">
        </div>

        <div class="col">
            <input type="submit" name="btn_enviar" value="Aceptar">
        </div>
    </form>
@endsection
