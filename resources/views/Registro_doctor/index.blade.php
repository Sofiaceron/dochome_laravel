@extends('Template.Template')
@section('plantillaweb')
    <h2>Lista de Registro Doctores</h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Sexo</th>
                <th scope="col">Cedula</th>
                <th scope="col">Fecha de Expedición</th>
                <th scope="col">Telefono</th>
                <th scope="col">Fotocopia de Cedula</th>
                <th scope="col">Fotocopia de Acta o Certificacion</th>
                <th scope="col">Fotocopia de Diploma</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registro_doctors as $registro_doctor)
                <tr>
                    <th scope="row">{{ $registro_doctor->id }}</th>
                    <td>{{ $registro_doctor->nombres }}</td>
                    <td>{{ $registro_doctor->apellidos }}</td>
                    <td>{{ $registro_doctor->sexo }}</td>
                    <td>{{ $registro_doctor->cedula }}</td>
                    <td>{{ $registro_doctor->fecha_expedicion }}</td>
                    <td>{{ $registro_doctor->telefono }}</td>
                    <td>{{ $registro_doctor->fcopia_cedula }}</td>
                    <td>{{ $registro_doctor->fcopia_acta_certificacion }}</td>
                    <td>{{ $registro_doctor->fcopia_diploma }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('registro_doctor.edit', $registro_doctor) }}"
                            role="button">Editar</a>
                    </td>

                    <td>
                        <form action="{{ route('registro_doctor.destroy', $registro_doctor) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
    {{$registro_doctors->links() }}
@endsection
