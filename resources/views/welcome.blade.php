@extends('plantilla')
@section('content')
<h1>Agencia de Viatges App</h1>

<div id="gallery" class="mt-5">
      <div class="container">
      @foreach ($publications as $publicaton)
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
          <h3 class="pt-2"></h3>
            <img src="{{ $publicaton->url }}" alt="" class="w-100">
            <p class="pb-2">{{ $publicaton->description }}</p>
            <p class="small text-secondary pb-2">{{ $publicaton->created_at }}</p>

        </div>
      </div>
      @endforeach
    </div>


@endsection
