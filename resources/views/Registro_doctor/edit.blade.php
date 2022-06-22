@extends('Template.Template')
@section('plantillaweb')
    <h2>Formulario edicion de Registro Doctores</h2>

    <form action="{{ route('registro_doctor.update', $registro_doctor) }}" method="post">
        @method('PUT')
        {{ csrf_field() }}
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label>Telefono</label>
            <input type="int" name="telefono" value="{{ $registro_doctor->telefono }}">
        </div>

        <div class="col-lg-6 col-md-4 col-sm-2">
            <label>Fotocopia de Cedula</label>
            <br>
            <input type="file" name="fcopia_cedula" value="{{ $registro_doctor->fcopia_cedula }}">
        </div>

        <div class="col-lg-6 col-md-4 col-sm-2">
            <label>Fotocopia de Acta o Certificacion</label>
            <br>
            <input type="file" name="fcopia_acta_certificacion"
                value="{{ $registro_doctor->fcopia_acta_certificacion }}">
        </div>

        <div class="col-lg-6 col-md-4 col-sm-2">
            <label>Fotocopia de Diploma</label>
            <br>
            <input type="file" name="fcopia_diploma" value="{{ $registro_doctor->fcopia_diploma }}">
        </div>


        <div class="col">
            <input type="submit" name="btn_enviar" value="Aceptar">
        </div>
    </form>
@endsection
