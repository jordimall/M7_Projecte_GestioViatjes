@extends('plantilla')
  
@section('content')
<div>
    <a href="{{ route('users.index') }}"> Tornar</a>
</div>
<h2>Usuari</h2>
              
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
   
        
@endsection