@extends('plantilla')
@section('content')

<h1>Comentaris</h1>

    <table border=1>
        <thead>
        <tr>
            <td>ID</td>
            <td>descripció</td>
            <td>likes</td>
            <td>ID usuari</td>
            <td>id publicació</td>
            <td>Data de creació</td>
            <td>Data d'actualització</td>
        </tr>
        </thead>
        <tbody>
        @foreach ($comments as $comment)
            <tr>
                <td>{{ $comment->id }}</td>
                <td>{{ $comment->description }}</td>
                <td>{{ $comment->like }}</td>
                <td>{{ $comment->user_id }}</td>
                <td>{{ $comment->publication_id }}</td>
                <td>{{ $comment->created_at }}</td>
                <td>{{ $comment->updated_at }}</td>
                <td><a href="{{ route('comments.destroy', $comment->id) }}">Esborrar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>



@endsection
