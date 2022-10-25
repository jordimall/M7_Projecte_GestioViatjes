@extends('plantilla')
@section('content')

    <h1>Publicacions</h1>

    <a href="/publicatons/formnew">Crear publicació</a>
    <table border=1>
        <thead>
        <tr>
            <th>ID</th>
            <th>imatge</th>
            <th>likes</th>
            <th>descripció</th>
            <th>id del usuari</th>
            <th>Data de creació</th>
            <th>Data d'actualització</th>
            <th colspan="4">Operacions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($publicatons as $publicaton)
            <tr>
                <td>{{ $publicaton->id }}</td>
                <td><img src="{{ $publicaton->url }}"></td>
                <td>{{ $publicaton->like }}</td>
                <td>{{ $publicaton->description }}</td>
                <td>{{ $publicaton->user_id }}</td>
                <td>{{ $publicaton->created_at }}</td>
                <td>{{ $publicaton->updated_at }}</td>
                <td><a href="/publications/show/{{ $publicaton->id }}">Mostrar</a></td>
                <td><a href="/publicatons/delete/{{ $publicaton->id }}">Esborrar</a></td>
                <td><a href="/publicatons/update/{{ $publicaton->id }}">Actualitzar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{-- {{ $publicaton->links('pagination::bootstrap-4') }} --}}

@endsection