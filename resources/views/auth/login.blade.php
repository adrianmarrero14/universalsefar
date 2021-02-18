@extends('layouts.app')

@section('content')

<!-- Background Image -->
<div class="bg-body padding-form">
    <div class="m-auto form-container">
        <h4 class="form-title">Acceder a Documentos Sefar</h4>
        <div class="form-bg-white">
            <form action="{{ route('login') }}" method="post">
            @csrf
                <div class="row mb-3">
                    <div class="">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                    
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-sefar w-100">
                        {{ __('Iniciar Sesión') }}
                    </button>
                </div>
            </form>
        </div>
        <div class="row form-footer">
            <div class="col-md-12">
                <a href="{{ route('password.request') }}">
                    {{ __('¿Olvidó su Contraseña?') }}
                </a>
            </div>
        </div>
    </div>

</div>
@endsection
