@extends('Template.Template')
@section('plantillaweb')
    <h2>Lista de Especialidades</h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Especialidades</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($especialidads as $especialidad)
                <tr>
                    <th scope="row">{{ $especialidad->id }}</th>
                    <td>{{ $especialidad->esp }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('especialidad.edit', $especialidad) }}"
                            role="button">Editar</a>
                    </td>

                    <td>
                        <form action="{{ route('especialidad.destroy', $especialidad) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
    {{ $especialidads->links() }}
@endsection
