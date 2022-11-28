@extends('plantilla')
@section('content')
<h1>Agencia de Viatges App</h1>

    <div class="row row-cols-1 row-cols-md-4 g-4">
      @foreach ($publications as $publicaton)
      <div class="col">
        <div class="card" style="width: 18rem;">
          <picture>
            <img src="{{ $publicaton->url }}" alt="" class="card-img-top img-fluid" style="height: 200px">
          </picture>
          
          <div class="card-body">
          <h3 class="pt-2">{{ $publicaton->tile }}</h3>
            
            <p class="pb-2">{{ $publicaton->description }}</p>
            <p class="small text-secondary pb-2">{{ $publicaton->created_at }}</p>
            <a href="/publications/show/{{ $publicaton->id }}" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>


@endsection
