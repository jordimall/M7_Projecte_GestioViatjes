@extends('plantilla')
@section('content')

    <h1>Usuaris</h1>

    <a href="/users/formnew">Crear Usuari</a>
    <table border=1>
        <tr>
            <td>ID</td>
            <td>Nom</td>
            <td>Cognoms</td>
            <td>Email</td>
            <td>Nom d'usuari</td>
            <td>Contrasenya</td>
            <td>Data de creació</td>
            <td>Data d'actualització</td>
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
                <td><a href="/users/show/{{ $user->id }}">Mostrar</a></td>
                <td><a href="/users/delete/{{ $user->id }}">Esborrar</a></td>
                <td><a href="/users/update/{{ $user->id }}">Actualitzar</a></td>
            </tr>
        @endforeach
    </table>

    <div>
        {{ $users->links('pagination::bootstrap-5') }}
    </div>

@endsection
