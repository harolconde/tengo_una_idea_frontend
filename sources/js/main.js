'use strict'



console.warn('Ingresando')

//Evento para el boton salir
for(let i = 0; i < btnPowerof.length; i++){
    btnPowerof[i].addEventListener('click', () => {
        console.log('Salir')
        if(statePower == false){
           btnLogout.style.display = 'block'
           statePower = true 
        }
        else{
            btnLogout.style.display = 'none'
            statePower = false
        }
    })
}

//Constantes mostrar mensaje completo
const btnSemoreMessage = document.getElementsByClassName('btn-seemoremessage')
const paragraphMessageChat = document.getElementsByClassName('idea-message-chat-users')
const btnMinus = document.getElementsByClassName('iconMoreMinus')
let state = false; //Boolean mostrar mensaje

//Evento mostrar todo el mensaje en el chat de ideas
for(let i = 0; i < btnSemoreMessage.length; i++){
    btnSemoreMessage[i].addEventListener('click', () => {
        if(state == false){
            paragraphMessageChat[i].style.whiteSpace = "normal"
            paragraphMessageChat[i].style.transitionDuration = "0.5s"
            btnMinus[i].classList.remove('fa-plus')
            btnMinus[i].classList.add('fa-minus')
            state = true;
        }
        else{
            paragraphMessageChat[i].style.whiteSpace = "nowrap"
            paragraphMessageChat[i].style.transitionDuration = "0.5s"
            btnMinus[i].classList.remove('fa-minus')
            btnMinus[i].classList.add('fa-plus')
            state = false
        }
    })
}

//Constantes mostrar popover me gusta
const btnLike = document.getElementsByClassName('iconLike')

// Constante acordeon perfil del usuario todas las ideas
const acordeon = document.getElementsByClassName('container-all-idea-user')
let panel = document.querySelectorAll('.list-allideas')//Panel oculto de acordeon perfil del usuario
let varBol = false //Boolean acordeon perfil del usuario

//Evento acordeon perfil del usuario
for(let i = 0; i < acordeon.length; i++){
    acordeon[i].addEventListener('click', function(){
       
        if(varBol == false){
            
            //panel[i].classList.add("activa-user")
            panel[i].style.display = 'block'
            panel[i].style.transition = ' display 1s ease'
            varBol = true
            console.log(panel[i])
        }
        else{
            panel[i].style.display = 'none'
            panel[i].style.transition = 'display 1s ease'
            varBol = false
            console.log(panel[i])
        }
    })
}


// Funcion mostrar ideas en carrusel en el tablero de ideas
$(document).ready(function(){

    $('.owl-cards').owlCarousel({
        loop:true,
        margin: 5,
        nav:true,
        smartSpeed: 900,
        dots: false,
        autoplay:false,
        autoplayTimeout:1000,
        //autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            767:{
                items:2
            },
            1199:{
                items:3
            },
            1285:{
                items: 4
            }

        }
    })
})












