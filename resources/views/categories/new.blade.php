@extends('plantilla')

@section('content')

    <h1 class="pb-2">Nova Categoria</h1>

    <form action="{{ route('categories.save') }}" method="POST">

        @csrf

        <div class="fs-5 d-flex flex-column">
            <div class="mb-3">
                <label class="mb-2" for="name">Nova categoria</label>
                <input type="text" name="name" class="form-control">
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
