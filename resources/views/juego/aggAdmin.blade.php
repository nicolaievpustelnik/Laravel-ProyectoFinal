@extends('layouts.plantillaAdmin')
@section('content')
<div class="container">
        <h1 class="_Nih1aggAdm">Agregar administrador</h1>
    </div>

    <section class="">
        
        <article class="">
            <a href="{{'homeAdmin'}}" class="btn _NibotSal-aggAdm btn-lg active" role="button" aria-pressed="true">Salir</a>
        </article>

    </section>

    <div class="row">
        <img class="_NilogoAgg-admin" src="img/nuevoAdmin.png" width="100" heigth="100" alt="">
    </div>

    <form class="col-4 text-center _NicuaAgg-adm" action="aggAdmin" method="post">
    @csrf
        <div class="form-group text-white">

            <label for=""><i class="fas fa-user" ></i> Usuario</label>
            <input type="text" class="form-control _Nainp-input" id="name" aria-describedby="name" placeholder="Nombre de Usuario" name="name" value="">
         

        </div>

        <div class="form-group text-white">

            <label for=""><i class="fas fa-envelope"></i> Email</label>
            <input type="Email" class="form-control _Nainp-input" id="email"  placeholder="Email" name="email" value="">
         
        </div>

        <div class="form-group text-white">
            <label for=""><i class="fas fa-key"></i> Contraseña</label>
            <input type="password" class="form-control _Nainp-input" id="password" placeholder=" password" name="password">
           
        </div>

        <div class="form-group text-white">
            <label for=""><i class="fas fa-key"></i> Confirmar contraseña</label>
            <input type="password" class="form-control _Nainp-input" id="confirmPassword"  placeholder=" Confirmar password" name="confirmPassword">
         
        </div>
                          
        <div class="form-group form-check">

        </div>

        <div  class="botonesLogin">
            <button type="submit" class="col-2 btn btn-primary btn-sm _Nacolor-entrar">Enviar</button>
        </div>
            
    </form>
@endsection