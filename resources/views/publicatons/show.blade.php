@extends('plantilla')

@section('content')
<div>
    <a href="{{ route('publications.index') }}" class="btn btn-primary stretched-link"> Tornar</a>
</div>
<h2>publicació</h2>

    <div id="showcase" class="pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col pr-0">
            <img src="../../{{ $publication->url }}" alt="" class="w-100">
          </div>
          <div class="col bg-white p-4">
            <h3 class="pt-2">Proba</h3>
            <p>{{ $publication->description }}</p>
            <p class="small text-secondary pb-2">{{ $publication->created_at }}</p>
          </div>
        </div>
      </div>
    </div>

    <div id="showcase" class="pt-5 pb-5">
      <div class="container">
        <div class="row">
    <strong>Comentaris</strong>
    @foreach($publication->comments as $comment)
    <div>
        <p>{{ $comment->description }}</p>
        <p>{{ $comment->user->username }}</p>
        <p>{{ $comment->like }}</p>
    </div>

@endforeach
</div>
      </div>
    </div>

@endsection
