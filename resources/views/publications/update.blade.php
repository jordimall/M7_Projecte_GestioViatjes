@extends('plantilla')
@section('content')

<div class="vh-100">

    <h1 class="text-center">Actualitzar publicació</h1>

    <form action="/publications/update/{{ old('id', $publication->id) }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="fs-5 d-flex flex-column">
            <div class="row mb-3">
                <label for="title">Escriu un titol</label>
                <input type="text" name="title" class="form-control" value="{{ old('name', $publication->title) }}">
            </div>
            <div class="row mb-3">
                <label for="subtitle">Escriu un subtitol</label>
                <input type="text" name="subtitle" class="form-control" value="{{ old('name', $publication->subtitle) }}">
            </div>
            <div class="row mb-3">
                <label for="description">Escriu una descripció</label>
                <textarea class="form-control" name="description" rows="4">{{ old('name', $publication->description) }}</textarea>
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
                        <label>
                            <input type="checkbox" name="categories[]" value="{{ $category->id }}" class="form-check-input"
                                @foreach ($publication->categories as $publicationCategory)
                                    @if ($category->id == $publicationCategory->id)
                                        checked
                                    @endif
                                @endforeach
                                >{{ $category->name }}
                            </label>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="row mb-3 m-auto">
                <button type="submit" class="btn btn-dark">Guardar</button>
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

</div>

@endsection