@extends('plantilla')
@section('content')
    <div class="container">
        <h2>Nova publicació</h2>

        <form action="{{ route('publications.save') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="title">Escriu un titul</label>
                <input type="text" name="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="subtitle">Escriu un subtitul</label>
                <input type="text" name="subtitle" class="form-control">
            </div>

            <div class="form-group">
                <label for="description">Escriu una descripció</label>
                <input type="text" name="description" class="form-control">
            </div>

            <div class="form-group">
                <label for="img">Selecciona una imatge</label>
                <input type="file" name="img" class="form-control" accept=".png, .jpg, .jpeg, .webp">
            </div>

            <div class="form-group">
                <label for="categories[]">Selecciona les categories:</label><br>
                @foreach ($categories as $category)
                    <div class="form-check form-check-inline">
                        <label>
                            <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                                class="form-check-input">{{ $category->name }}
                        </label>
                    </div>
                @endforeach
            </div>

            <div class="form-group">
                <button type="submit" class=" btn btn-dark">Save</button>
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
