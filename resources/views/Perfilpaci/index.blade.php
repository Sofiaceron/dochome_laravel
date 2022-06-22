@extends('Template.Template')
@section('plantillaweb')
    <h2>Lista de Perfil pacientes</h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Sexo</th>
                <th scope="col">Edad</th>
                <th scope="col">Dirección</th>
                <th scope="col">Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perfilpacis as $perfilpaci)
                <tr>
                    <th scope="row">{{ $perfilpaci->id }}</th>
                    <td>{{ $perfilpaci->nombres }}</td>
                    <td>{{ $perfilpaci->apellidos }}</td>
                    <td>{{ $perfilpaci->sexo }}</td>
                    <td>{{ $perfilpaci->edad }}</td>
                    <td>{{ $perfilpaci->direccion }}</td>
                    <td>{{ $perfilpaci->descripcion }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('perfilpaci.edit', $perfilpaci) }}"
                            role="button">Editar</a>
                    </td>

                    <td>
                        <form action="{{ route('perfilpaci.destroy', $perfilpaci) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
    {{ $perfilpacis->links() }}
@endsection
