(function(){
    "use strict";
    
    document.addEventListener('DOMContentLoaded', function(){
        

        //mapa 
        var mymap = L.map('mapa',{scrollWheelZoom:false}).setView([8.305265, -62.709961], 12);
        var marker = L.marker([8.305265, -62.709961]).addTo(mymap);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1Ijoicm9tZXJvZiIsImEiOiJja2p5eWZlZHIwMmNzMm9wNWkzOXgxYWl5In0.PYzBliDnmQj5tMDBfL6EIg'
        }).addTo(mymap);


        var nombre = document.getElementById('nombre');

        //datos de usuario
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');

        //pases
        var pase_dias = document.getElementById('pase_dia');
        var pase_completo = document.getElementById('pase_completo');
        var pase_2dias = document.getElementById('pase_2dias');

        //botones y divs
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var botonRegistro = document.getElementById('btnRegistro');
        var resultado = document.getElementById('suma-total');
        var lista_productos = document.getElementById('lista-productos');

        //
        var camisa_evento = document.getElementById('camisa_evento'); 
        var etiquetas = document.getElementById('etiquetas'); 


        calcular.addEventListener('click', calcularTotal);

        nombre.addEventListener('blur', validar);
        apellido.addEventListener('blur', validar);
        email.addEventListener('blur', validar);
        email.addEventListener('blur', validarEmail);

        function validarEmail(){
            if(!/^\w[\w\.-]*@\w[\w\.-]*\.\w+$/.test(this.value)){
                this.parentNode.style.borderLeft= '2px solid red';
            }
        }
        function validar(){
             
            if(!this.value){
                errorDiv.style.color= 'red';
                errorDiv.innerHTML='<p>Hay campos vacios, por favor ingrese los datos solicitados</p>';
                errorDiv.style.maxHeight='30px';
                this.parentNode.style.borderLeft= '2px solid red';
                vacio = false;
            }else{
                this.parentNode.style.borderLeftColor= 'transparent';
                if(nombre.value && apellido.value && email.value){

                    errorDiv.style.maxHeight='';
                }
            }
        }

        function calcularTotal (event){
            event.preventDefault();
            if(!regalo.value) {
                console.log('debe elegir un regalo');
            }else{

                let ccam = parseInt(camisa_evento.value, 10) || 0 ;
                let cetiq = parseInt(etiquetas.value, 10) || 0 ;
                let c2Dias = parseInt(pase_2dias.value, 10) || 0 ;
                let cComp = parseInt(pase_completo.value, 10) || 0 ;
                let cDia = parseInt(pase_dia.value, 10) || 0 ;
                
                let total = (c2Dias * 45) + (cComp * 50) + (cDia * 30) + (cetiq * 2) + (ccam * 9.3);
                total = total.toFixed(2); //limita los decimales a 2
                //console.log(total);

                let resumen = [];
                if(ccam) resumen.push(` ${ccam} Camisa(s)`);
                if(cetiq) resumen.push(`  ${cetiq} Etiqueta(s)`);
                if(c2Dias) resumen.push(` ${c2Dias} Pase(s) por dos dias`);
                if(cComp) resumen.push(` ${cComp} Pase(s) completo`);
                if(cDia) resumen.push(` ${cDia} Paquete(s) de etiquetas`);

                let lista = document.createElement('ul');

                resumen.forEach( e => {
                    let li = document.createElement('li');
                    lista.appendChild(li).append(document.querySelector('i.fa.fa-check').cloneNode(), document.createTextNode(e));
                    lista.style.padding= '20px';
                    lista.style.backgroundColor = 'whitesmoke';
                })
                
                let pResult = document.createElement('p');
                pResult.setAttribute('class','numero');

                if(resultado.firstChild) resultado.removeChild(resultado.firstChild);
                resultado.appendChild(pResult).appendChild(document.createTextNode(total));

                if(lista_productos.firstChild) lista_productos.removeChild(lista_productos.firstChild);
                lista_productos.appendChild(lista);
            }

        }
        
        //console.log(document.createTextNode('soy un nodo de texto'));
    } );
})();

//programacion de eventos
$(function() {
    $('programa-evento nav a').on('click',changeTab);
    function chageTab(){
        $('ct-active').removeClass('ct-active')
        
        $(this).addClass('ct-active');
        
        $('ocultar').hide();
        $(a.attr('href')).fadeIn();
    }

})