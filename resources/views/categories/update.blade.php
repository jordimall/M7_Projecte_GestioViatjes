@extends('plantilla')

@section('content')

    <h1 class="pb-2">Actualitzar categoria</h1>

    <form action="/categories/update/{{ old('id', $category->id) }}" method="POST">

        @csrf

        <div class="fs-5 d-flex flex-column">
            <div class="mb-3">
                <label for="name">Modifica la categoria</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $category->name) }}">
            </div>
            <div class="mb-3">
                <button type="submit" class=" btn btn-dark">Guardar</button>
            </div>
        </div>

    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection