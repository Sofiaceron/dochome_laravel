@extends('Template.Template')
@section('plantillaweb')
    <h2>Perfil Paciente</h2>

    <form action="{{ route('perfilpaci.store') }}" method="post">
        {{ csrf_field() }}
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-2 ">
                    <label>Nombres</label>
                    <input type="text" name="nombres">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2 ">
                    <label>Apellidos</label>
                    <input type="text" name="apellidos">
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-2">
                <label>Sexo</label>
                <select id="cars" name="sexo">
                    <option selected="true" disabled="disabled">-seleccionar </option>
                    <option value="M">M </option>
                    <option value="F">F</option>

                </select>
            </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
                <label>Edad</label>
                <input type="int" name="edad">
            </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
                <label>Dirección</label>
                <input type="text" name="direccion">
            </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
                <label>Descripcion</label>
                <input type="longtext" name="descripcion">
            </div>

        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 offset-md-3">
                <input type="submit" name="btn_enviar" value="Aceptar">
            </div>
        </div>

        </div>
    </form>
@endsection
