@extends('layouts.app')
@section('content')
<?php
$cuenta = count($preguntas);
$arr=[];


?>
<body class="_NibodySolo-juego">

<div class="container">

    <nav class="_NiPnavnav-ju">
        <section class="_Ninav-ju mt-2 mb-5">
            
            <article>
            <a class=""><img class="_Nifot-nav" width="50" heigth="50" src="" alt=""></a>
            </article>
        
            <article class="_Niart-salir-jue">
                <a href="{{'home'}}" class="btn _Nibot-sal-ju btn-lg active" role="button" aria-pressed="true">Salir</a>
            </article>

        </section>
    </nav>

    <!--Pregunta-->
    <section class="_Nicaja-pregunta-principal">
        <h2 class="_Nititulo-pregunta"></h2>
    </section>
    
    <!--CAJITA DE RELOJ-->
    <section  class="_Nicajita-info-ju">
        <h3 class="_contador _Nireloj-pregunta-h3">1/30 </h3>
        <h3 class="_Nireloj-pregunta-h3"> <span id="minutos">0</span> : <span id="segundos">0</span> </h3>
        <h4><ion-icon class="_Niicono-vidas" name="heart"></ion-icon><ion-icon class="_Niicono-vidas" name="heart"></ion-icon><ion-icon class="_Niicono-vidas" name="heart-dislike"></ion-icon></h4>
    </section>

    <!--Respuestas-->
    <main class=" _Nicaja-completa-respuestas">

        <section class="_Nisepara-pregunta">
            
            <button  class="_botonjs _Nirespuesta-par">
            <p class="_Niletra-pregunta">1.-</p> <h3 class="_Niletra-pregunta"></h3>
            </button>
            <button class="_botonjs _Nirespuesta-par">
                <p class="_Niletra-pregunta">2.-</p> <h3 class="_Niletra-pregunta"></h3>
            </button>

        </section>

        <section class="_Nisepara-pregunta">

            <button class="_botonjs _Nirespuesta-par">
                <p class="_Niletra-pregunta">3.-</p> <h3 class="_Niletra-pregunta"></h3>
            </button>
            <button class="_botonjs _Nirespuesta-par">
                <p class="_Niletra-pregunta">4.-</p> <h3 class="_Niletra-pregunta"></h3>
            </button>
            <input id="cuenta" type="hidden" value="{{$cuenta}}">
        </section>

    </main>
</div>

</body>
@endsection
