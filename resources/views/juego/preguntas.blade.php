@extends('layouts.plantillaAdmin')
@section('content')
<div class="container">

<div>
 <h1 class="text-center _Nih1preg">Preguntas</h1> 
</div>

@if (session('mensaje'))
    <div class="alert alert-info alert-danger fade show text-center" role="alert">
          {{session('mensaje')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div>
    <div class="_Nibotpreg">            
        <a href="{{'homeAdmin'}}" class="_NiBsalPreg btn btn-lg active" role="button" aria-pressed="true">Salir</a>
        <a href="{{'agregarPregunta'}}" class="_NiBeditpreg btn btn-lg active" role="button" aria-pressed="true">Agregar pregunta</a>
    </div>
</div>

<table class="table _NiTpreg">

    <thead class="thead-dark">
        <th>ID</th>
        <th>Pregunta</th>
        <th>Respuesta</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </thead>

     
    <tbody>
    @foreach ($preguntas as $key => $value)
                <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->pregunta}}</td>
                <td>{{$value->respuestaCorrecta}}</td>
                <td><a href=""><ion-icon name="create"></ion-icon></a></td>
                <td><a href="/preguntas/{{$value->id}}"><ion-icon name="close"></ion-icon></a></td>
                </tr>

            @endforeach
    </tbody>

</table>


</div>
@endsection