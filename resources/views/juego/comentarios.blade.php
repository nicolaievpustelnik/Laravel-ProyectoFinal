@extends('layouts.plantillaAdmin')
@section('content')
<div class="container">

<div>
 <h1 class="text-center _Nih1preg">Comentarios</h1> 
</div>

@if (session('msj'))
    <div class="alert alert-info alert-danger fade show text-center" role="alert">
          {{session('msj')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div>
    <div class="_Nibotpreg">            
        <a href="{{'homeAdmin'}}" class="_NiBsalPreg btn btn-lg active" role="button">Salir</a>
    </div>
</div>

<table class="table _NiTpreg">

    <thead class="thead-dark">
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Comentario</th>
        <th>Eliminar</th>
    </thead>

    <tbody>
    @foreach ($comentarios as $key => $value)
                <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->nombreC}}</td>
                <td>{{$value->apellidoC}}</td>
                <td>{{$value->comentarios}}</td>
                <td><a href="/comentarios/{{$value->id}}"><ion-icon name="close"></ion-icon></a></td>
                </tr>

            @endforeach
    </tbody>


</table>






</div>
@endsection
