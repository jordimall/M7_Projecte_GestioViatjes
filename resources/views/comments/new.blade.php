@extends('plantilla')
@section('content')

<h2>Nou Comentari</h2>

<form action="/comments/save/{{ $id }}" method="POST">

	@csrf

	<div class="form-group">
        <label for="description">Escriu el comentari</label>
        <input type="text" name="description" class="form-control">
    </div>

   <button type="submit" class="btn btn-primary">Save</button>

</form>

@if($errors->any())
<ul>
	@foreach($errors->all() as $error)
	<li>{{ $error  }}</li>
	@endforeach
</ul>
@endif

@endsection