@extends('plantilla')
@section('content')

<h2>Nova publicació</h2>

<form action="/publications/save" method="POST" enctype="multipart/form-data">

	@csrf

	Real name:<input type="text" name="heroname"><br>
	Hero name:<input type="text" name="realname"><br>
	Gender:<select name="gender">
		<option selected>male</option>
		<option>female</option>
	</select><br>
	Planet:<select name="planet_id">
		@foreach($planets as $planet)
		<option value="{{ $planet->id }}">{{ $planet->name  }}</option>
		@endforeach
	</select><br>

	<input type="submit" value="registrar">

</form>

@if($errors->any())
<ul>
	@foreach($errors->all() as $error)
	<li>{{ $error  }}</li>
	@endforeach
</ul>
@endif

@endsection
