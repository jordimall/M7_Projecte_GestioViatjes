@extends('plantilla')
@section('content')
    <div class="container" style="min-height: 100%">
        <h2>Nou Comentari</h2>

        <form action="/comments/save/{{ $id }}" method="POST">

            @csrf

            <div class="form-group">
                <label for="description">Escriu el comentari</label>
                <input type="text" name="description" class="form-control">
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
