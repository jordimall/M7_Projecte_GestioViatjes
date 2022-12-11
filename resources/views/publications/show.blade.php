@extends('plantilla')

@section('content')
    <h1 class="text-center pb-4">{{ $publication->title }}</h1>

    <div class="container">
        <div class="row">
            <div class="col">
                <picture>
                    <img src="../../{{ $publication->url }}" class="rounded img-fluid">
                </picture>
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
                            @foreach ($publication->categories as $category)
                                #{{ $category->name }}
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="pl-3 pt-1 d-flex justify-content-start d-flex flex-column">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#0d6efd"
                                class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            </svg>
                            <strong>{{ $publication->user->name }}</strong>
                        </div>
                        @auth
                            @if ($publication->user->id == Auth::user()->id)
                                <div class="mt-3">
                                    <a href="{{ route('publications.edit', $publication->id) }}" class="btn btn-dark">Edita publicaió</a>
                                    <a href="{{ route('publications.destroy', $publication->id) }}" class="btn btn-danger">Eliminar publicaió</a>
                                </div>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-4">
            <div class="fs-4">
                <strong class="pl-5">Comentaris</strong>
                <form action="{{ route('comments.save', $publication->id) }}" method="POST">

                    @csrf

                    <div class="form-group">
                        <label for="description">Escriu el comentari</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>

                    <div class="form-group mt-3 mb-3">
                        <button type="submit" class="btn btn-dark">Comenta</button>
                    </div>

                </form>
            </div>
        </div>
        
            @foreach ($publication->comments as $comment)
                <div class="row pt-2">
                    <div class="col d-flex align-items-center ">
                        <p class="h6 mb-0">
                            <span class="text-primary">&commat;{{ $comment->user->username }}</span>
                            {{ $comment->description }}
                        </p>
                    </div>

                    @auth

                        @if ($comment->user->id == Auth::user()->id)
                            <div class="col">
                                <ul class="navbar-nav">
                                    <li>
                                        <a id="navbarDropdown" class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" v-pre>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                            <div>
                                                <a class="dropdown-item" href="/comments/update/{{ $comment->id }}">
                                                    {{ __('Modificar') }}
                                                </a>

                                                <a class="dropdown-item" href="/comments/delete/{{ $comment->id }}">
                                                    {{ __('Eliminar') }}
                                                </a>

                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    @endauth
                </div>
            @endforeach
        
    </div>
@endsection
