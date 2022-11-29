@extends('plantilla')
@section('content')
    <h1 class="pb-2">Publicacions</h1>

    {{--<a href="/publications/formnew">Crear publicació</a>
     <table border=1>
        <thead>
            <tr>
                <th>ID</th>
                <th>imatge</th>
                <th>likes</th>
                <th>descripció</th>
                <th>id del usuari</th>
                <th>Data de creació</th>
                <th>Data d'actualització</th>
                <th colspan="4">Operacions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($publicatons as $publicaton)
                <tr>
                    <td>{{ $publicaton->id }}</td>
                    <td><img class="img-thumbnail rounded mx-auto d-block" src="{{ $publicaton->url }}"></td>
                    <td>{{ $publicaton->like }}</td>
                    <td>{{ $publicaton->description }}</td>
                    <td>{{ $publicaton->user_id }}</td>
                    <td>{{ $publicaton->created_at }}</td>
                    <td>{{ $publicaton->updated_at }}</td>
                    <td><a href="/publications/show/{{ $publicaton->id }}">Mostrar</a></td>
                    <td><a href="/publicatons/delete/{{ $publicaton->id }}">Esborrar</a></td>
                    <td><a href="/publicatons/update/{{ $publicaton->id }}">Actualitzar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}

    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($publications as $publication)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $publication->url }}" class="card-img-top" alt="">
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


    <div>
        {{ $publications->links('pagination::bootstrap-5') }}
    </div>

    {{-- {{ $publicaton->links('pagination::bootstrap-4') }} --}}
@endsection
