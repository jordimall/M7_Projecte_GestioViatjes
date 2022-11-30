@extends('plantilla')
@section('content')
    <div class="container" style="min-height: 100%">
        <h2>Nova Categoria</h2>

        <form action="{{ route('categories.save') }}" method="POST">

            @csrf

            <div class="form-group">
                <label for="name">Nova categoria</label>
                <input type="text" name="name" class="form-control">
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
