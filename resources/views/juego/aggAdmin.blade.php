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

    <form class="col-4 text-center _NicuaAgg-adm" action="agregarAdmin.php" method="post">

        <div class="form-group text-white">

            <label for=""><i class="fas fa-user" ></i> Usuario</label>
            <input type="text" class="form-control _Nainp-input" id="userName" aria-describedby="emailHelp" placeholder="Nombre de Usuario" name="userName" value="">
         

        </div>

        <div class="form-group text-white">

            <label for=""><i class="fas fa-envelope"></i> Email</label>
            <input type="Email" class="form-control _Nainp-input" id="email"  placeholder="Email" name="email" value="">
         
        </div>

        <div class="form-group text-white">
            <label for=""><i class="fas fa-key"></i> password</label>
            <input type="password" class="form-control _Nainp-input" id="password" placeholder=" password" name="password">
           
        </div>

        <div class="form-group text-white">
            <label for=""><i class="fas fa-key"></i> Confirmar password</label>
            <input type="password" class="form-control _Nainp-input" id="confirmPassword"  placeholder=" Confirmar password" name="confirmPassword">
         
        </div>
                          
        <div class="form-group form-check">

        </div>

        <div  class="botonesLogin">
            <button type="submit" class="col-2 btn btn-primary btn-sm _Nacolor-entrar">Entrar</button>
        </div>
            
    </form>
@endsection