@extends('layouts.plantillaGeneral')

@section('content')
<div class="container _containerLogin">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div id="p2" class="text-center _logop2">
                <img class="text-center zoom" src="{{asset('img/P2.png')}}" alt="logo" width=100 height=100>
            </div>

            <div id="logindiv" class="_NiCua-log col-7">
                <div class="col-12 text-center"><ion-icon class="_jsA-tex mt-2 _Niico-cont-log" name="contact"></ion-icon></div>
                <hr>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="_jsA-tex col-12 text-center">{{ __('E-Mail') }}</label>

                            <div class="col-12 text-center">
                                <input id="email" type="email" class="_input-logL col-6 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="_jsA-tex col-12 text-center">{{ __('Contraseña') }}</label>

                            <div class="col-12 text-center">
                                <input id="password" type="password" class="_input-logL col-6 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12 text-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="_jsA-tex form-check-label" for="remember">
                                        {{ __('Recuérdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="text-center">
                                <button type="submit" class="_BentrarL">
                                    {{ __('Entrar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class=" btn btn-link col-12" href="{{ route('password.request') }}">
                                        {{ __('Olvidé contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
