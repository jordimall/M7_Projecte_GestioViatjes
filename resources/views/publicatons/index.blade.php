@extends('plantilla')
@section('content')

    <h1>Publicacions</h1>

    <a href="/publicatons/formnew">Crear Usuari</a>
    <table border=1>
        <thead>
        <tr>
            <td>ID</td>
            <td>imatge</td>
            <td>likes</td>
            <td>descripció</td>
            <td>id del usuari</td>
            <td>Data de creació</td>
            <td>Data d'actualització</td>
        </tr>
        </thead>
        <tbody>
        @foreach ($publicatons as $publicaton)
            <tr>
                <td>{{ $publicaton->id }}</td>
                <td><img src="{{ $publicaton->url }}"></td>
                <td>{{ $publicaton->likes }}</td>
                <td>{{ $publicaton->description }}</td>
                <td>{{ $publicaton->user_id }}</td>
                <td>{{ $publicaton->created_at }}</td>
                <td>{{ $publicaton->updated_at }}</td>
                <td><a href="/publicatons/delete/{{ $publicaton->id }}">Esborrar</a></td>
                <td><a href="/publicatons/update/{{ $publicaton->id }}">Actualitzar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{-- {{ $publicaton->links('pagination::bootstrap-4') }} --}}

@endsection
