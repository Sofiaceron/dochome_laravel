@extends('Template.Template')
@section('plantillaweb')
    <h2>Perfil Doctor</h2>

    <form action="{{ route('perfildoc.store') }}" method="post">
        {{ csrf_field() }}
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-2 ">
                    <label>Correo Electronico</label>
                    <input type="email" name="correo_electronico">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2 ">
                    <label>Password</label>
                    <input type="password" name="password">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2  ">
                    <label for="cars">Especializacion</label>
                    <select id="cars" name="idEspecializacion">
                        <option selected="true" disabled="disabled">-seleccionar </option>
                        @foreach ($especialidads as $especialidad)
                            <option value="{{ $especialidad->id }}">{{ $especialidad->esp }}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-2">
                <label>direccion</label>
                <input type="text" name="direccion">
            </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
                <label>WhatsApp</label>
                <input type="text" name="whatsApp">
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
