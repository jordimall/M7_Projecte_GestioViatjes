@extends('plantilla')
@section('content')
    <div class="card mt-4">
        <div class="card-header">
            <h5 class="card-title">Actualitzar publicació</h5>
        </div>
        <div class="card-body">


            <form action="/publications/update/{{ old('id', $publication->id) }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="form-group">
                    <label for="title">Escriu un titol</label>
                    <input type="text" name="title" class="form-control" value="{{ old('name', $publication->title) }}">
                </div>

                <div class="form-group">
                    <label for="subtitle">Escriu un subtitol</label>
                    <input type="text" name="subtitle" class="form-control"
                        value="{{ old('name', $publication->subtitle) }}">
                </div>

                <div class="form-group">
                    <label for="description">Escriu una descripció</label>
                    <input type="text" name="description" class="form-control"
                        value="{{ old('name', $publication->description) }}">
                </div>

                <div class="form-group">
                    <label for="img">Selecciona una imatge</label>
                    <input type="file" name="img" class="form-control" accept=".png, .jpg, .jpeg, .webp">
                </div>

                <div class="form-group">
                    <label for="categories[]">Selecciona les categories:</label><br>
                    @foreach ($categories as $category)
                        <div class="form-check form-check-inline">
                            <label><input type="checkbox" name="categories[]" value="{{ $category->id }}"
                                    class="form-check-input"
                                    @foreach ($publication->categories as $publicationCategory)
                                    @if ($category->id == $publicationCategory->id)
                                        checked
                                    @endif @endforeach>{{ $category->name }}</label>
                        </div>
                    @endforeach
                </div>

                <div class="form-group">
                    <button type="submit" class=" btn btn-dark">Save</button>
                </div>

            </form>
        </div>
    </div>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection
