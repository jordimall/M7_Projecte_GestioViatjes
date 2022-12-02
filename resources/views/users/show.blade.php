@extends('plantilla')

@section('content')

<div>

    <h1 class="text-center pb-4">Perfil de {{ $user->name }}</h1>

    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col fs-5">
                <strong class="pl-5">Nom complet: </strong><span>{{ $user->name }} {{ $user->surname }}</span><br>
            </div>
            <div class="col fs-5">
                <strong class="pl-5">Username: </strong><span>{{ $user->username }}</span><br>
            </div>
            <div class="col fs-5">
                <strong class="pl-5">Email: </strong><span>{{ $user->email }}</span><br>
            </div>
            <div class="col">
                <a class="btn btn-dark" href="/users/passwordConfirmation/{{ $user->id }}">
                    Canviar Password
                </a>
            </div>
        </div>
        
        <div class="row">

            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach ($user->publication as $publication)
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset($publication->url) }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $publication->title }}</h5>
                                <p class="card-text">{{ Str::limit($publication->description, 100) }}</p>
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

</div>
@endsection