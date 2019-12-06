window.addEventListener('load',()=>{
    var cronometro;
    var contador=document.querySelector('._contador')
    var botones =document.querySelectorAll('button')
    var cuent = document.querySelector('#cuenta')
    var registros = cuent.value
    var count = 0
    var id = Math.floor(Math.random()*(registros-1))+1

  
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

})
