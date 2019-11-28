@extends('layouts.plantillaGeneral')

@section('content')
<div class="container _Nicont-ho">

<section class="row mt-5 _Nisec-ho">
  
      <article class="col-lg-7 text-center _Nicuadro-perf-ho">
      <article class="col-lg-6 p-2">
      <!--falta consicion en la cual si no hay una session muestere foto default-->
      <a class="" href=""><img class="_Nifot-perf mt-3" src="" alt="Foto" height="150" width="150" ></a>
      </article>

      <article class="col-lg-6 p-3 _Nitit-bien-ho">
          <h2><ion-icon class="mr-2" name="thumbs-up"></ion-icon>BIENVENIDO: <strong>nombre</strong> <ion-icon class="ml-2" name="happy"></ion-icon></h2>
      </article>

      <article class="_Niart-ho">
      <br>
      <a href="juego.php" class="_Nibot-comen-ho btn btn-lg active mt-3 mb-3" role="button" aria-pressed="true">Comenzar a jugar</a></article>
     </article>

  
</section>

</div>
@endsection
