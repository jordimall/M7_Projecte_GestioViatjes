@extends('plantilla')

@section('content')

    <h1 class="pb-2">Usuaris</h1>


    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th style="border-radius:5px 0 0 0;" scope="col" class="text-center">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Cognoms</th>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col" class="text-center">Creació</th>
                <th scope="col" class="text-center">Actualització</th>
                <th scope="col" colspan="3" class="text-center" style="border-radius:0 5px 0 0;">Operacions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <th scope="row" class="text-center">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->surname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->username }}</td>
                <td class="text-center">{{ $user->created_at }}</td>
                <td class="text-center">{{ $user->updated_at }}</td>
                <td class="text-center"><a class="btn btn-info" href="/users/show/{{ $user->id }}">Mostrar</a></td>
                <td class="text-center"><a class="btn btn-danger" href="{{ route('users.destroy', $user->id) }}">Esborrar</a></td>
                <td class="text-center"><a class="btn btn-warning" href="{{ route('userEdit', ['user' => $user->id]) }}"">Actualitzar</a></td>
            </tr>
        @endforeach
    </table>

    <div>
        {{ $users->links('pagination::bootstrap-5') }}
    </div>

@endsection