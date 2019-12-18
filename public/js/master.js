window.addEventListener('load',()=>{
    var cronometro;
    var contador=document.querySelector('._contador')
    var botones =document.querySelectorAll('button')
    var count = 0
    // var id = Math.floor(Math.random()*(registros-1))+1

  
        botones[1].addEventListener('click',()=>{
            count++
             if(count<=30){
                var arr = []
                
            contador.innerText = count+"/30"
        }
        })
        botones[2].addEventListener('click',()=>{
            count++
             if(count<=30){
            contador.innerText = count+"/30"
        }
        })
        botones[3].addEventListener('click',()=>{
            count++
             if(count<=30){
            contador.innerText = count+"/30"
        }
        })
        botones[4].addEventListener('click',()=>{
            count++
              if(count<=30){
            contador.innerText = count+"/30"
        }
        })

       
    
 
    function detener(){
        clearInterval(cronometro);
    }
    
    function carga(){
        var contador_s=0;
        var contador_m=0;
    
        let s=document.getElementById("segundos");
        let m=document.getElementById("minutos");
    
        cronometro = setInterval(function(){
    
            if(contador_s==60){
                contador_s=0;
                contador_m++;
                m.innerHTML = contador_m;
            }
            s.innerHTML = contador_s;
            contador_s++;
    
        }
        ,1000);
    }
    carga()
    // window.onload = function() {
    //     this.carga();
    // }
    // window.onclick = function() {
    //     this.detener();
    // }

   var esto = fetch('json')
  .then(function(response) {
    return response.json();
  })
  .then(function(myJson) {
    return myJson;
  });

//   var pr = document.querySelectorAll('._pr');
//   pr[0].innerText = esto;
//   console.log(esto.PromiseValue)



    fetch('http://localhost:8000/json')
        .then(function(response){
            return response.json()
        })
        .then(function(data){
            console.log(data)
            let pregunta = document.getElementById('pregunta')
            let answer1 = document.getElementById('answer1')
            let answer2 = document.getElementById('answer2')
            let answer3 = document.getElementById('answer3')
            let answer4 = document.getElementById('answer4')
            pregunta.innerHTML = data.preguntaImp.pregunta
            answer1.innerHTML = data.preguntaImp.respuesta1
            answer2.innerHTML = data.preguntaImp.respuesta2
            answer3.innerHTML = data.preguntaImp.respuesta3
            answer4.innerHTML = data.preguntaImp.respuestaCorrecta
            console.log(data.respuestaRandon)
            console.log(pregunta)
            answer1.addEventListener('click', seleccionado)
            answer2.addEventListener('click', seleccionado)
            answer3.addEventListener('click', seleccionado)
            answer4.addEventListener('click', seleccionado)
            function seleccionado(){
                console.log(this.parentElement.id)
                if(this.parentElement.id == data.respuestaRandon){
                    console.log('opcion correcta')
                    location.href = location.href
                }else{
                    console.log('opcion incorrecta')
                }
            }
        })
        .catch(function(error){
            console.log(error)
        })

    

})

$(document).ready(function () {
    // LOGIN JS
    $('#p2').addClass('animated bounceInDown') 
    $('#logindiv').addClass('animated bounceIn')

    $('#logindiv').mouseover(function(){
        $('._input-logL').addClass('animated pulse')
    })
    $('#logindiv').mouseout(function(){
        $('._input-logL').removeClass('animated pulse')
    })

    $('#logindiv').mouseover(function(){
        $('._jsA-tex').addClass('animated pulse')
    })
    $('#logindiv').mouseout(function(){
        $('._jsA-tex').removeClass('animated pulse')
    })

    // REGISTRO JS
    $('.flechas').addClass('animated bounceInDown') 

    $('.Deco').mouseover(function(){
        $('.p2Regis').addClass('animated wobble')
    })
    $('.Deco').mouseout(function(){
        $('.p2Regis').removeClass('animated wobble')
    })

    //JUEGO JS
    $('#_botonjs1').mouseover(function(){
        $('#_botonjs1').addClass('animated pulse')
        $('#timeJs').addClass('animated heartBeat')
    })
    $('#_botonjs1').mouseout(function(){
        $('#_botonjs1').removeClass('animated pulse')
        $('#timeJs').removeClass('animated heartBeat')
    })
    $('#_botonjs2').mouseover(function(){
        $('#_botonjs2').addClass('animated pulse')
        $('#timeJs').addClass('animated heartBeat')
    })
    $('#_botonjs2').mouseout(function(){
        $('#_botonjs2').removeClass('animated pulse')
        $('#timeJs').removeClass('animated heartBeat')
    })
    $('#_botonjs3').mouseover(function(){
        $('#_botonjs3').addClass('animated pulse')
        $('#timeJs').addClass('animated heartBeat')
    })
    $('#_botonjs3').mouseout(function(){
        $('#_botonjs3').removeClass('animated pulse')
        $('#timeJs').removeClass('animated heartBeat')
    })
    $('#_botonjs4').mouseover(function(){
        $('#_botonjs4').addClass('animated pulse')
        $('#timeJs').addClass('animated heartBeat')
    })
    $('#_botonjs4').mouseout(function(){
        $('#_botonjs4').removeClass('animated pulse')
        $('#timeJs').removeClass('animated heartBeat')
    })

    // EDITAR PERFIL
    $('#editPerf').addClass('animated zoomInUp') 

    // HOME
    $('#home').hide();
    $('#home').show(1500);


    // FAQ
    $('#preg1').hide();
    $('#cuadro1').click(function(){
        $('#preg1').toggle(2000)
    })


})
