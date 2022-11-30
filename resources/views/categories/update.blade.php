@extends('plantilla')
@section('content')
    <div class="card mt-4">
        <div class="card-header">
            <h5 class="card-title">Actualitzar categoria</h5>
        </div>
        <div class="card-body">


            <form action="/categories/update/{{ old('id', $category->id) }}" method="POST">

                @csrf

                <div class="form-group">
                    <label for="name">Modifica la categoria</label>
                    <input type="name" name="description" class="form-control"
                        value="{{ old('name', $category->name) }}">
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