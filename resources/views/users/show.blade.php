@extends('plantilla')
  
@section('content')

<h2>Perfil d'Usuari</h2>

<div>
    <div>
        Nom complet: <span>{{ $user->name }} {{ $user->surname }}</span>
    </div>
    <div>
        Username: <span>{{ $user->username }}</span>
    </div>
    <div>
        Email: <span>{{ $user->email }}</span>
    </div>
    <button type="submit" class="btn btn-primary" data-bs-toggle="collapse" href="#password" aria-expanded="false" aria-controls="collapseExample">Canviar Password</button>
</div>

{{-- Mostra els dos camps per a canviar password --}}
<div class="collapse" id="password">
    <div class="form-group card card-body">
        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
        
            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
        
            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>
    </div>
</div>
        
@endsection