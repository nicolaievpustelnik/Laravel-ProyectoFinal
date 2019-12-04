@extends('layouts.plantillaAdmin')
@section('content')
<div class="container">

<h1 class="_NihomPreg">Home</h1>

<section class="">
<img class="_NiimgAdm-hom" src="img/admin.png" alt="Foto" height="150" width="150" >
</section>

<section class="_NicuaHom-adm text-center">
<article>
    <h1 class="_Nih1adm-Hom">Administrador</h1>
</article>

<article class="mt-4">
    <a href="{{'preguntas'}}"><button type="button" class="btn _Nibtns-hom">Tabla de preguntas</button></a>
</article>

<article class="mt-3">
    <a href="{{'aggPreg'}}"><button type="button" class="btn _Nibtns-hom">Agregar pregunta</button></a>
</article>

<article class="mt-3">
    <a href="{{'aggAdmin'}}"><button type="button" class="btn _Nibtns-hom">Agregar administrador</button></a>
</article>

<article class="mt-3">
    <a href="{{'comentarios'}}"><button type="button" class="btn _Nibtns-hom">Comentarios</button></a>
</article>
</section>


</div>
@endsection