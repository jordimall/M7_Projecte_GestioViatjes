@extends('plantilla')
@section('content')

<h1>Categories</h1>

    <a href="{{ route('categories.formnew') }}" class="btn btn-primary">Crear Categoria</a>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <td>ID</td>
            <td>nom</td>
            <td>Data de creació</td>
            <td>Data d'actualització</td>
            <td colspan="2">Operacions</td>
        </tr>
        </thead>
        <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->created_at }}</td>
                <td>{{ $category->updated_at }}</td>
                <td><a href="/categories/delete/{{ $category->id }}" class="btn btn-danger">Esborrar</a></td>
                <td><a href="/categories/update/{{ $category->id }}" class="btn btn-info">Actualitzar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div>
        {{ $categories->links('pagination::bootstrap-5') }}
    </div>

@endsection
