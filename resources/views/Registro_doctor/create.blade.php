@extends('Template.Template')
@section('plantillaweb')
    <h2>Registro Doctor</h2>

    <form action="{{ route('registro_doctor.store') }}" method="post">
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
                <label>Cedula</label>
                <input type="int" name="cedula">
            </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
                <label>Fecha de Expedición</label>
                <input type="date" name="fecha_expedicion">
            </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
                <label>Telefono</label>
                <input type="int" name="telefono">
            </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
                <label>Fotocopia de Cedula</label>
                <br>
                <input type="file" name="fcopia_cedula">
            </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
                <label>Fotocopia de Acta o Certificacion</label>
                <br>
                <input type="file" name="fcopia_acta_certificacion">
            </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
                <label>Fotocopia de Diploma</label>
                <br>
                <input type="file" name="fcopia_diploma">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 offset-md-3">
                <input type="submit" name="btn_enviar" value="Registrar">
            </div>
        </div>

        </div>
    </form>
@endsection
