@extends('Template.Template')
@section('plantillaweb')
    <h2>Citas</h2>

    <form action="{{ route('cita.store') }}" method="post">
        {{ csrf_field() }}
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-2  ">
                    <label for="cars">Especialidades</label>
                    <select id="cars" name="especialidadId">
                        <option selected="true" disabled="disabled">-seleccionar </option>
                        @foreach ($especialidads as $especialidad)
                            <option value="{{ $especialidad->id }}">{{ $especialidad->esp }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2  ">
                    <label for="cars">Doctor</label>
                    <select id="cars" name="doctorId">
                        <option selected="true" disabled="disabled">-seleccionar </option>
                        @foreach ($registro_doctors as $registro_doctor)
                            <option value="{{ $registro_doctor->id }}">{{ $registro_doctor->nombres_y_apellidos}}</option>
                        @endforeach

                    </select>
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

