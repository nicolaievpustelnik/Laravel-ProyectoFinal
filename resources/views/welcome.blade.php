@extends('layouts.plantillaGeneral')

@section('content')

<div class="container">

    <main class="row">
      <article class="_Nibgh1-registrate">
        <h1 class="_Natit-reg">Registrate</h1>
      </article>

      <section class="row _Nacuadro-completo-reg mb-3">

        <article class="col-12 _Nadeco-lin-reg">
          deco
        </article>

        <article class="col-12 text-center _Naico-reg-deco">
          <ion-icon name="arrow-round-down"></ion-icon>
          <ion-icon name="person-add"></ion-icon>
          <ion-icon name="arrow-round-down"></ion-icon>
        </article>

        <article class="col-lg-6 col-sm-12 _Nacuadro-info-reg">

          <article class="p-5">
            <h1 class="_Nah1-izqui-reg">Pregunta²</h1>
            <br>
            <h2 class="_Nah2-izqui-reg">Resgístrate y juega!</h2>
            <p class="_Nacolor-text-norm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti necessitatibus placeat vitae id iste   vero saepe soluta recusandae, laboriosam voluptatibus, est nihil sint non facere aspernatur cumque.   Nesciunt, corporis! Harum!</p>
            <br>
            <p class="_Nacolor-text-norm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi similique repellendus qui expedita   aliquam natus quis fugit, non perspiciatis blanditiis nam aspernatur! Distinctio a libero similique   repellendus suscipit perspiciatis placeat!</p>
          </article>

        </article>

        <article class="col-lg-5 col-sm-12 _Naseccion ml-2 pb-2 ">

            <div class="row mt-4 justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Register') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </article>

        </section>

    </main>

</div>


</div>
@endsection