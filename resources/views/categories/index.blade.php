@extends('plantilla')
@section('content')

<h1>Categories</h1>

    <a href="/categories/formnew">Crear Categoria</a>
    <table border=1>
        <thead>
        <tr>
            <td>ID</td>
            <td>nom</td>
            <td>Data de creació</td>
            <td>Data d'actualització</td>
        </tr>
        </thead>
        <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->created_at }}</td>
                <td>{{ $category->updated_at }}</td>
                <td><a href="/categories/delete/{{ $category->id }}">Esborrar</a></td>
                <td><a href="/categories/update/{{ $category->id }}">Actualitzar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{-- {{ $publicaton->links('pagination::bootstrap-4') }} --}}

@endsection