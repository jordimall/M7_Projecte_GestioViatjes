@extends('plantilla')
@section('content')

<div class="vh-100">

    <h1 class="text-center">Nova publicació</h1>

    <form action="{{ route('publications.save') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="fs-5 d-flex flex-column">
            <div class="row mb-3">
                <label for="title">Escriu un titul</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="row mb-3">
                <label for="subtitle">Escriu un subtitul</label>
                <input type="text" name="subtitle" class="form-control">
            </div>
            <div class="row mb-3">
                <label for="description">Escriu una descripció</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
            </div>
            <div class="row mb-3">
                <label for="img">Selecciona una imatge</label>
                <input type="file" name="img" class="form-control" accept=".png, .jpg, .jpeg, .webp">
            </div>
            <div class="row mb-3">
                <label for="categories[]">Selecciona les categories:</label><br>
                <div class="d-flex">
                @foreach ($categories as $category)
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="categories[]" value="{{ $category->id }}" class="form-check-input">{{ $category->name }}
                    </div>
                @endforeach
                </div>
            </div>
            <div class="row mb-3 m-auto">
                <button type="submit" class="btn btn-dark">Guardar</button>
            </div>
            
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</div>

@endsection
