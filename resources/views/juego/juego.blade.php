@extends('layouts.app')
@section('content')
<?php
// $cuenta = count($preguntas);
// $arr=[];


?>
<body class="_NibodySolo-juego">

<div class="container">

    <nav class="_NiPnavnav-ju">
        <section class="_Ninav-ju mt-2 mb-5">
            
            <article>
            <a class=""><img class="" width="50" heigth="50" src="../img/p2.png" alt=""></a>
            </article>
        
            <article class="_Niart-salir-jue">
                <a href="{{'home'}}" class="btn _Nibot-sal-ju btn-lg active" role="button" aria-pressed="true">Salir</a>
            </article>

        </section>
    </nav>

    <div>
        <img class="_imgJuGif" src="../img/signo.gif" alt="img" width="130" height="145">
    </div>

    <!-- <embed src="../music/reloj.mp3" autostarty="true" loop="true" volume="100" width="0" height="0"> -->
    <!-- <audio src="../music/reloj.mp3" autostarty="true" loop="true" volume="100" width="0" height="0"></audio> -->
    <!-- <audio src="../music/reloj.mp3" autoplay="autoplay" preload="preload" controls="controls"></audio> -->


    <!--Pregunta-->
    <section class="_Nicaja-pregunta-principal">
        <h2 class="_Nititulo-pregunta" id="pregunta"></h2>
    </section>
    
    <!--CAJITA DE RELOJ-->
    <section  class="_Nicajita-info-ju">
        <h3 class="_contador _Nireloj-pregunta-h3">1/30 </h3>
        <h3 id="timeJs" class="_Nireloj-pregunta-h3"> <span id="minutos">0</span> : <span id="segundos">0</span> </h3>
        <h4><ion-icon class="_Niicono-vidas" name="heart"></ion-icon><ion-icon class="_Niicono-vidas" name="heart"></ion-icon><ion-icon class="_Niicono-vidas" name="heart-dislike"></ion-icon></h4>
    </section>

    <!--Respuestas-->
    <main class=" _Nicaja-completa-respuestas">

        <section class="_Nisepara-pregunta">
            
            <button id="1" class="_botonjs _Nirespuesta-par">
            <p class="_Niletra-pregunta _pr"  id="answer1">1.-</p>
         </button>
            <button id="2" class="_botonjs _Nirespuesta-par">
                <p class="_Niletra-pregunta _pr"  id="answer2">2.-</p>
             </button>

        </section>

        <section class="_Nisepara-pregunta">

            <button id="3" class="_botonjs _Nirespuesta-par">
                <p class="_Niletra-pregunta _pr" id="answer3">3.-</p>
             </button>
            <button id="4" class="_botonjs _Nirespuesta-par">
                <p class="_Niletra-pregunta _pr"  id="answer4">4.-</p>
             </button>
        </section>

    </main>
</div>

</body>
@endsection
