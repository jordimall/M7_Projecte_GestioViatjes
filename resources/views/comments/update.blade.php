@extends('plantilla')
@section('content')
    <div class="card mt-4">
        <div class="card-header">
            <h5 class="card-title">Actualitzar comentari</h5>
        </div>
        <div class="card-body">


            <form action="/comments/update/{{ old('description', $comment->id) }}" method="POST">

                @csrf

                <div class="form-group">
                    <label for="description">Escriu el comentari</label>
                    <input type="text" name="description" class="form-control"
                        value="{{ old('description', $comment->description) }}">
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
