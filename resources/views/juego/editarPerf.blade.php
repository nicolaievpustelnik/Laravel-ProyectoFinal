@extends('layouts.app')

@section('content')
<div class="container">
    <nav class="_NiPnavnav-ju">
        <section class="_Ninav-ju">
            
            <article>
            <a class=""><img class="_Nifot-nav" width="50" heigth="50" src="" alt=""></a>
            </article>
        
            <article class="_Niart-salir-jue">
                <a href="{{'home'}}" class="btn _Nibot-sal-ju btn-lg active" role="button" aria-pressed="true">Salir</a>
            </article>

        </section>
    </nav>

        <form class="" action="editarPerfil" method="post" enctype="multipart/form-data">

            <section class="_NisecP-edit text-center">
                <h1 class="_Nih1edit-perf">Editar perfil</h1>
                

                <article class="_NiTtex-edit text-center">
                    <img id="editPerf" class="_NiimgPerf-edit" src="{{Storage::url('avatars/'. Auth::user()->avatar)}}" alt="" width="250" height="250">

                    

                    <h4 class="mt-2">Editar foto</h4>
                    <label for="">New Foto</label>
                    <input type="file" class="" id="newAvatar" name="newAvatar">
                    <hr>
                </article>

                <article class="_NiediNom-edit col-5">
                    <br>
                    <h4 class="text-center">Editar Nombre</h4>
                    <article class="text-center">
                        <h2>Nombre De Usuario</h2>
                        <input class="_NicampoEscrip-edit" type="text" name="newNombre">
                    </article>
                    <br>
                </article>

                <article class="_NiediPass-edit col-5">
                    <h4>Editar Password</h4>
                    <article>
                        <label for="">Password Actual</label>
                        <input class="_NicampoEscrip-edit" type="password" name="password">
                    </article>
                    <article>
                        <label for="">Nuevo Password</label>
                        <input class="_NicampoEscrip-edit" type="password" name="newPassword">
                    </article>
                    <article>
                        <label for="">Confirmar password</label>
                        <input class="_NicampoEscrip-edit" type="password" name="newPasswordConfirm">
                    </article>
                </article>

                <article class="_Niart-ho">
                <button class="_Nibot-comen-ho btn btn-lg active mt-3 mb-3">Enviar</button></article>
                </article>

            </section>
        </form>
    </div> 

@endsection
