@extends('Template.Template')
@section('plantillaweb')
    <h2>Lista de Perfil doctores</h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Correo</th>
                <th scope="col">Password</th>
                <th scope="col">Especializacion</th>
                <th scope="col">WhatsApp </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perfildocs as $perfildoc)
                <tr>
                    <th scope="row">{{ $perfildoc->id }}</th>
                    <td>{{ $perfildoc->correo_electronico }}</td>
                    <td>{{ $perfildoc->password }}</td>
                    <td>{{ $perfildoc->idEspecializacion }}</td>
                    <td>{{ $perfildoc->whatsApp }}</td>

                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('perfildoc.edit', $perfildoc) }}"
                            role="button">Editar</a>
                    </td>

                    <td>
                        <form action="{{ route('perfildoc.destroy', $perfildoc) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
    {{ $perfildocs->links() }}
@endsection
