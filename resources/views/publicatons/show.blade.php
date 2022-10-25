@extends('plantilla')
  
@section('content')
<div>
    <a href="{{ route('publications.index') }}"> Tornar</a>
</div>
<h2>publicació</h2>
              
<div>
        
    <div>
        <strong>Imatge</strong>
        <img src="../../{{ $publication->url }}">
    </div>
        
    <div>            
       <strong>Like</strong>
       {{ $publication->like }}
    </div>
    <div>
        <strong>Descripció</strong>
        {{ $publication->description }}
    </div>
        
    <div>
        <strong>usuari</strong>
        {{ $publication->user->username }}
    </div>
        
    <div>
        <strong>Categoria:</strong>
        <ul>
        @foreach($publication->categories as $category)
            <li>
            {{ $category->name }} 
            </li>
        @endforeach
        </ul>
    </div>

    <strong>Comentaris</strong>
    @foreach($publication->comments as $comment)
    <div>
        <p>{{ $comment->description }}</p>
        <p>{{ $comment->user->username }}</p>
        <p>{{ $comment->like }}</p>
    </div>
   
@endforeach
        
@endsection