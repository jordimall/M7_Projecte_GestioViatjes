@extends('plantilla')

@section('content')

    <h1 class="pb-2">Comentaris</h1>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <td style="border-radius:5px 0 0 0;" scope="col" class="text-center">ID</td>
                <td scope="col">Descripció</td>
                <td scope="col" class="text-center">Likes</td>
                <td scope="col" class="text-center">ID usuari</td>
                <td scope="col" class="text-center">ID publicació</td>
                <td scope="col" class="text-center">Data de creació</td>
                <td scope="col" class="text-center">Data d'actualització</td>
                <td scope="col" class="text-center" style="border-radius:0 5px 0 0;">Operacions</td>
            </tr>
        </thead>
        <tbody>
        @foreach ($comments as $comment)
            <tr>
                <th scope="row" class="text-center">{{ $comment->id }}</th>
                <td>{{ $comment->description }}</td>
                <td class="text-center">{{ $comment->like }}</td>
                <td class="text-center">{{ $comment->user_id }}</td>
                <td class="text-center">{{ $comment->publication_id }}</td>
                <td class="text-center">{{ $comment->created_at }}</td>
                <td class="text-center">{{ $comment->updated_at }}</td>
                <td class="text-center"><a href="{{ route('comments.destroy', $comment->id) }}" class="btn btn-danger">Esborrar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>



@endsection
