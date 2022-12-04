@extends('plantilla')

@section('content')

<div class="vh-100">

    <form method="POST" action="/users/updatePassword/{{ $id }}">

        @csrf

        <div class="fs-5 d-flex flex-column">
            {{-- Mostra els dos camps per a canviar password --}}
            <div class="row mb-3">
                <label for="password" class="col-md-4 text-md-end">{{ __('Password') }}</label>

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
                <label for="password_confirmation" class="col-md-4 text-md-end">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <div class="row mb-3 m-auto">
                <button type="submit" name="updatePassword" class="btn btn-dark">Canviar Password</button>
            </div>
        </div>
        
    </form>

</div>

@endsection