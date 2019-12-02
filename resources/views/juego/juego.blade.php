@extends('layouts.app')
@section('content')
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
        <h2 class="_Nititulo-pregunta">¿Cómo se llama el juego?</h2>
    </section>
    
    <!--CAJITA DE RELOJ-->
    <section class="_Nicajita-info-ju">
        <h3 class="_Nireloj-pregunta-h3">1/30 </h3>
        <h3 class="_Nireloj-pregunta-h3">00:00:00</h3>
        <h4><ion-icon class="_Niicono-vidas" name="heart"></ion-icon><ion-icon class="_Niicono-vidas" name="heart"></ion-icon><ion-icon class="_Niicono-vidas" name="heart-dislike"></ion-icon></h4>
    </section>

    <!--Respuestas-->
    <main class=" _Nicaja-completa-respuestas">

        <section class="_Nisepara-pregunta">
            
            <article class="_Nirespuesta-par">
                <p class="_Niletra-pregunta">1.-</p> <h3 class="_Niletra-pregunta">Preguntados²</h3>
            </article>
            <article class="_Nirespuesta-par">
                <p class="_Niletra-pregunta">2.-</p> <h3 class="_Niletra-pregunta">Preguntados</h3>
            </article>

        </section>

        <section class="_Nisepara-pregunta">

            <article class="_Nirespuesta-par">
                <p class="_Niletra-pregunta">3.-</p> <h3 class="_Niletra-pregunta">Pregunta Pregunta</h3>
            </article>
            <article class="_Nirespuesta-par">
                <p class="_Niletra-pregunta">4.-</p> <h3 class="_Niletra-pregunta">Pregunta²</h3>
            </article>

        </section>

    </main>



</div>

</body>
@endsection