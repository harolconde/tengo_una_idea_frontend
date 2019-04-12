'use strict'


//*******************************************************************************//
// ****************************** CONSTANTES DEL HOME ***************************//
//*******************************************************************************//

//Constantes para el boton salir
const btnPowerof = document.getElementsByClassName('btnLogout')
const btnLogout = document.getElementById('btn-logout-off')

//Constantes mostrar mensaje completo
const btnSemoreMessage = document.getElementsByClassName('btn-seemoremessage')
const paragraphMessageChat = document.getElementsByClassName('idea-message-chat-users')

//Constantes mostrar popover me gusta
const btnLike = document.getElementsByClassName('iconLike')
console.log(btnLike)
for(let i = 0; i < btnLike.lenght; i++){
    console.log(i)
    likeIdea[i].addEventListener('click', () => console.log('Me gusta'))
}
//*******************************************************************************//
// ************************** CONSTANTES PERFIL DE USUARIO **********************//
//*******************************************************************************//

// Constante acordeon perfil del usuario todas las ideas
const acordeon = document.getElementsByClassName('container-all-idea-user')

// Constantes boton editar datos 
const btnEdit = document.getElementById('btn-edit-user')
const panelEdit = document.getElementById('container-edit-datos')

//*******************************************************************************//
// ***************************** VARIABLES GENERALES *************************//
//*******************************************************************************//

//************* Variables del home ***************/
let statePower = false; //Boolean btn salir
let state = false; //Boolean mostrar mensaje

//*************** Variables perfil de usuario **************//
let panel = document.querySelectorAll('.list-allideas')//Panel oculto de acordeon perfil del usuario
let varBol = false //Boolean acordeon perfil del usuario
let stateEdit = false //Boolean btn editar perfil del usuario

//*******************************************************************************//
// ***************************** FUNCIONES  *************************//
//*******************************************************************************//

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

//*******************************************************************************//
// ***************************** VISTA DEL HOME EVENTOS *************************//
//*******************************************************************************//

//Evento para el boton salir
for(let i = 0; i < btnPowerof.length; i++){
    btnPowerof[i].addEventListener('click', () => {
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

//**************Chat ideas*************//

//Evento mostrar todo el mensaje en el chat de ideas
for(let i = 0; i < btnSemoreMessage.length; i++){
    btnSemoreMessage[i].addEventListener('click', () => {
        if(state == false){
            paragraphMessageChat[i].style.whiteSpace = "normal"
            paragraphMessageChat[i].style.transitionDuration = "0.5s"
            state = true;
        }
        else{
            paragraphMessageChat[i].style.whiteSpace = "nowrap"
            paragraphMessageChat[i].style.transitionDuration = "0.5s"
            state = false
        }
    })
}

//*******************************************************************************//
// ***************************** VISTA DEL PERFIL DEL USUARIO EVENTOS *************************//
//*******************************************************************************//

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

btnEdit.addEventListener('click', function(){
    if(stateEdit == false){
        panelEdit.style.display = 'block'
        stateEdit = true
    }
    else{
        panelEdit.style.display = 'none'
        stateEdit = false
    }
})


// Funcion acordeon perfil del usuario
// const acord = document.getElementsByClassName('container-all-idea-user')
// const panel = document.querySelectorAll('list-allideas') 

// let acordeon = function(){
//     for(let i = 0; i < acord.length; i++){
//         acord[i].addEventListener('click', ()=>{
//             console.log(this)
//         })
//     }
// }
//window.addEventListener('load', acordeon)






