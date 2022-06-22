@extends('Template.Template')
@section('plantillaweb')
    <h2>Formulario edicion de perfil doctor</h2>

    <form action="{{ route('perfildoc.update', $perfildoc) }}" method="post">
        @method('PUT')
        {{ csrf_field() }}
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>Correo Electronico:</label>
            <input type="email" name="correo_electronico" value="{{ $perfildoc->correo_electronico }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>Password:</label>
            <input type="password" name="password" value="{{ $perfildoc->password }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label for="cars">Especializacion:</label>
            <input type="selec" name="idEspecializacion" value="{{ $perfildoc->idEspecializacion }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <label>WhatsApp:</label>
            <input type="text" name="whatsApp" value="{{ $perfildoc->whatsApp }}">
        </div>

        <div class="col">
            <input type="submit" name="btn_enviar" value="Aceptar">
        </div>
    </form>
@endsection
