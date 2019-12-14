@extends('layouts.plantillaGeneral')

@section('content')

<div class="container">

    <main class="row">
      <article class="Deco _Nibgh1-registrate">
        <h1 class="_Natit-reg">Registrate</h1>
      </article>

      <section class="row _Nacuadro-completo-reg mb-3">

        <article class="Deco col-12 _Nadeco-lin-reg">
          deco
        </article>

        <article class="col-12 text-center _Naico-reg-deco">
          <ion-icon class="flechas" name="arrow-round-down"></ion-icon>
          <ion-icon class="Deco" name="person-add"></ion-icon>
          <ion-icon class="flechas" name="arrow-round-down"></ion-icon>
        </article>

        <article class="col-lg-6 col-sm-12 _Nacuadro-info-reg">
          <article class="p-1">
            <h1 class="_Nah1-izqui-reg pt-5 ">Pregunta²</h1>
            <br>
            <h2 class="_Nah2-izqui-reg">Resgístrate y juega!</h2>
            <p class="_Nacolor-text-norm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti necessitatibus placeat vitae id iste   vero saepe soluta recusandae, laboriosam voluptatibus, est nihil sint non facere aspernatur cumque.   Nesciunt, corporis! Harum!</p>
            <br>
            <p class="_Nacolor-text-norm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi similique repellendus qui expedita   aliquam natus quis fugit, non perspiciatis blanditiis nam aspernatur! Distinctio a libero similique   repellendus suscipit perspiciatis placeat!</p>
          </article>

        </article>

        <article class="col-lg-5 col-sm-12 ml-2 pb-2 _Naseccion">

            <div class="row mt-4 justify-content-center">
                <div class="col-md-12">
                    <div class="text-center">
                        <div class="p2Regis mb-2 _logp2-reg"><img class="" src="{{asset('img/P2.png')}}" width=60 height=60></div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row text-white">
                                        <label for="name" class="col-md-3 col-form-label text-md-right"><ion-icon name="person"></ion-icon></label>

                                        <div class="col-md-8 pr-5">
                                            <input id="name" placeholder="Nombre de Usuario" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row text-white">
                                        <label for="email" class="col-md-3 col-form-label text-md-right"><ion-icon name="mail"></ion-icon></label>

                                        <div class="col-md-8 pr-5">
                                            <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row text-white">
                                        <label for="password" class="col-md-3 col-form-label text-md-right"><ion-icon name="key"></ion-icon></label>

                                        <div class="col-md-8 pr-5">
                                            <input id="password" placeholder="Contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row text-white">
                                        <label for="password-confirm" class="col-md-3 col-form-label text-md-right"><ion-icon name="unlock"></ion-icon></label>

                                        <div class="col-md-8 pr-5">
                                            <input id="password-confirm" placeholder="Confirmar contraseña" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row text-white">
                                        <label for="avatar" class="col-md-3 col-form-label text-md-right"><ion-icon name="image"></ion-icon></label>

                                        <div class="col-md-8 pr-5">
                                        <input id="avatar" placeholder="Avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" autocomplete="avatar">

                                        @error('avatar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>                                    

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Registrar') }}
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
