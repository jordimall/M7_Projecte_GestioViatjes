@extends('plantilla')
@section('content')

    <div class="vh-100">

        <div class="fs-4 d-flex flex-column">
            <div class="row mb-3">
                <h1 class="text-center">Actualitzar comentari</h1>
            </div>
            <div class="row mb-3">
                <form action="/comments/update/{{ old('description', $comment->id) }}" method="POST">
                    @csrf
                    <label for="description" class="text-md-start">Escriu el comentari</label>
                    <textarea class="form-control" name="description" rows="3">{{ old('description', $comment->description) }}</textarea>
                    <button type="submit" class="mt-3 btn btn-dark">Guardar</button>
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
    </div>

@endsection
