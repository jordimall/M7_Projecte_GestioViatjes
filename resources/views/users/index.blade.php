@extends('plantilla')
@section('content')

    <h1>Usuaris</h1>

    <a href="/users/formnew" class="btn btn-primary">Crear Usuari</a>
    <table class="table table-striped table-hover">
        <tr>
            <td>ID</td>
            <td>Nom</td>
            <td>Cognoms</td>
            <td>Email</td>
            <td>Nom d'usuari</td>
            <td>Contrasenya</td>
            <td>Data de creació</td>
            <td>Data d'actualització</td>
            <td colspan="3">Operacions</td>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->surname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
                <td><a href="/users/show/{{ $user->id }}" class="btn btn-dark">Mostrar</a></td>
                <td><a href="/users/delete/{{ $user->id }}" class="btn btn-danger">Esborrar</a></td>
                <td><a href="/users/update/{{ $user->id }}" class="btn btn-info">Actualitzar</a></td>
            </tr>
        @endforeach
    </table>

    <div>
        {{ $users->links('pagination::bootstrap-5') }}
    </div>

@endsection
