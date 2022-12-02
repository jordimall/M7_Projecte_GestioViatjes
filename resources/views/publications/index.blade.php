@extends('plantilla')
@section('content')

    <h1 class="pb-2">Publicacions</h1>
    <a href="{{ route('publications.formnew')}}" class="btn btn-primary">Crea publicació</a>

    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($publications as $publication)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <picture>
                        <img src="{{ $publication->url }}" alt="" class="card-img-top img-fluid"
                            style="height: 200px">
                    </picture>
                    <div class="card-body">
                        <h5 class="card-title">{{ $publication->title }}</h5>
                        <p class="card-text">{{ Str::limit($publication->description, 95) }}</p>
                        <p class="card-text">
                            <small class="text-muted">
                                {{ $publication->created_at->format('d/m/Y') }}
                            </small>
                        </p>
                        <a href="/publications/show/{{ $publication->id }}" class="w-100 btn btn-dark">Mostrar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <div>
        {{ $publications->links('pagination::bootstrap-5') }}
    </div>

    {{-- {{ $publicaton->links('pagination::bootstrap-4') }} --}}

@endsection
