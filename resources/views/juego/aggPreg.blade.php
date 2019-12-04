@extends('layouts.plantillaAdmin')
@section('content')
<div>

    <form class=" text-center" action="agregarPregunta.php" method="post">

        <h1 class="_NiTh1edit-preg">Agregar preguntas</h1>

        <div class="_Nibotpreg">            
            <a href="{{'homeAdmin'}}" class="_NiBsalPreg btn btn-lg active" role="button" aria-pressed="true">Salir</a>
            <button type="submit" class="_NiBeditpreg btn btn-lg active" role="button" aria-pressed="true">Enviar pregunta</button> 
        </div>

        <!--Edit Pregunta-->
        <section class="_Niingresa-preg text-center">

            <input type="text" class="text-center _NicampEPreg" id="ingresarPregunta" placeholder="Ingresar pregunta" name="pregunta" value="">

        </section>

        <!--Edit Respuestas-->  
            
            <article class="col-5">
                <input type="text" class="text-center _NicampR-editP" id="" placeholder="1.- Respuesta 1" name="respuesta1" value="">
            </article>
            <article class="col-5">
                <input type="text" class="text-center _NicampR-editP" id="" placeholder="2.- Respuesta2" name="respuesta2" value="">
            </article>

            <article class="col-5">
                <input type="text" class="text-center _NicampR-editP" id="" placeholder="3.- Respuesta 3" name="respuesta3" value="">
            </article>
            <article class="col-5">
                <input type="text" class="text-center _NicampR-editP" id="" placeholder="4.- Respuesta Correcta" name="respuestaCorrecta" value="">
            </article>
        
    </form>
</div>
@endsection