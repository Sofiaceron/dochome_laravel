@extends('Template.Template')
@section('plantillaweb')
    <h2>Formulario edicion de especialidades</h2>

    <form action="{{ route('especialidad.update', $especialidad) }}" method="post">
        @method('PUT')
        {{ csrf_field() }}
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>especialidad</label>
            <input type="text" name="esp" value="{{ $especialidad->esp }}">
        </div>

        <div class="col">
            <input type="submit" name="btn_enviar" value="Aceptar">
        </div>
    </form>
@endsection
