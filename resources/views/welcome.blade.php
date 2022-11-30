@extends('plantilla')

@section('content')
    <h1>Agencia de Viatges App</h1>

    <div id="gallery" class="mt-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach ($publications as $publication)
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <picture>
                                <img src="{{ $publication->url }}" alt="" class="card-img-top img-fluid"
                                    style="height: 200px">
                            </picture>

                            <div class="card-body">
                                <h3 class="pt-2">{{ $publication->tile }}</h3>

                                <p class="pb-2">{{ Str::limit($publication->description, 95) }}</p>
                                <p class="card-text">
                                  <small class="text-muted">
                                      {{ $publication->created_at->day }}/{{ $publication->created_at->month }}/{{ $publication->created_at->year }}
                                  </small>
                              </p>
                                <a href="/publications/show/{{ $publication->id }}" class="w-100 btn btn-dark">Mostrar</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
