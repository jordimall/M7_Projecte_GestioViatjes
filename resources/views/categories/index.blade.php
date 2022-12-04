@extends('plantilla')

@section('content')

    <h1 class="pb-2">Categories</h1>

    <a href="{{ route('categories.formnew') }}" class="mb-3 btn btn-dark">Crear Categoria</a>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th style="border-radius:5px 0 0 0;" scope="col" class="text-center">ID</th>
                <th scope="col">nom</th>
                <th scope="col" class="text-center">Data de creació</th>
                <th scope="col" class="text-center">Data d'actualització</th>
                <th scope="col" colspan="2" class="text-center" style="border-radius:0 5px 0 0;">Operacions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($categories as $category)
            <tr>
                <th scope="row" class="text-center">{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                <td class="text-center">{{ $category->created_at }}</td>
                <td class="text-center">{{ $category->updated_at }}</td>
                <td class="text-center"><a href="/categories/update/{{ $category->id }}" class="btn btn-warning">Actualitzar</a></td>
                <td class="text-center"><a href="/categories/delete/{{ $category->id }}" class="btn btn-danger">Esborrar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div>
        {{ $categories->links('pagination::bootstrap-5') }}
    </div>

@endsection
