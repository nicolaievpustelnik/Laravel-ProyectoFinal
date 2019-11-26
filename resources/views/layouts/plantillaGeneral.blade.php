<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">

    <!-- OTROS -->
    <script src="https://kit.fontawesome.com/eccefc8370.js"></script>
    <script src="menu/script.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Play|Staatliches&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body class="body-Ju">
    <div id="app">
        <nav class="_Ninav-Ju navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('img/logochico.png')}}" alt="logo" width=180 height=50>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto ">
                        <!-- Authentication Links -->
                        @guest

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('ranking') }}">{{ __('Ranking') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('faq') }}">{{ __('FAQ') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contacto') }}">{{ __('Contacto') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="_Ninav-login" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="_Ninav-regis" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>


        <footer class="footer-Ju">
        <section class="col-4 mt-3"> 
            <ion-icon class="mr-2 _Niicons-foot" name="code-working"></ion-icon>
            <article><strong>Información importante:</strong></article>
            <article> Lorem ipsum, dolor sit amet consectetur.</article>
            </section>

            <section class="col-4 mt-3">
            <ion-icon class="mr-2 _Niicons-foot" name="logo-game-controller-a"></ion-icon> 
            <article><strong>Juego:</strong></article>
            <article>Lorem ipsum dolor sit, amet consectetur adipisicing.</article>
            </section>

            <section class="col-4 mt-3"> 
            <ion-icon class="mt-2 _Niicons-foot" name="call"></ion-icon>
            <article><strong>Contáctenos:</strong></article>
            <article><a href="contacto.php">Nuestras redes sociales</a></article>
            <article><ion-icon class="mt-4 _Niicons-footRede" name="logo-facebook"></ion-icon><ion-icon class="mt-4 mr-2 ml-2 mt-4 _Niicons-footRede" name="logo-twitter"></ion-icon><ion-icon class="_Niicons-footRede" name="logo-instagram"></ion-icon></article>
            </section>

            <section class="mt-1 _Nibgcopy">
            <article><strong>2019 &copy; Pregunta²</strong></article>
            </section>
        </footer>

    </div>

<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>