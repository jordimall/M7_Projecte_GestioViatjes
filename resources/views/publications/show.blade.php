@extends('plantilla')
  
@section('content')
                
    <h1 class="text-center pb-4">{{ $publication->title }}</h1>

    <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <img class="img-fluid rounded" src="../../{{ $publication->url }}">
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="pl-3 pt-2 fs-4">
                        <strong>{{ $publication->subtitle }}</strong>
                    </div>
                </div>
                <div class="row">
                    <div class="pl-3 pt-1">
                        <p class="h5">{{ $publication->description }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="pl-3 pt-1">
                        <p class="h6">
                            @foreach($publication->categories as $category)
                                #{{ $category->name }} 
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="pl-3 pt-1 d-flex justify-content-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#0d6efd" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        </svg>
                        <strong>{{ $publication->user->name }}</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-4">
            <div class="fs-4">
                <strong class="pl-5">Comentaris</strong><br>
                <a href="/comments/formnew/{{ $publication->id }}" class="btn btn-dark">Escriu Comentari</a>
            </div>
        </div>
        <div class="row pt-2">
            @foreach($publication->comments as $comment)
                <p class="h6">
                    <span class="text-primary">&commat;{{ $comment->user->username }}</span>
                     {{ $comment->description }}
                </p>
            @endforeach
        </div>
    </div>

@endsection
