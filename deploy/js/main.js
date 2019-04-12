'use strict'; //*******************************************************************************//
// ****************************** CONSTANTES DEL HOME ***************************//
//*******************************************************************************//
//Constantes para el boton salir

var btnPowerof = document.getElementsByClassName('btnLogout');
var btnLogout = document.getElementById('btn-logout-off'); //Constantes mostrar mensaje completo

var btnSemoreMessage = document.getElementsByClassName('btn-seemoremessage');
var paragraphMessageChat = document.getElementsByClassName('idea-message-chat-users'); //Constantes mostrar popover me gusta

var btnLike = document.getElementsByClassName('iconLike');
console.log(btnLike);

for (var i = 0; i < btnLike.lenght; i++) {
  console.log(i);
  likeIdea[i].addEventListener('click', function () {
    return console.log('Me gusta');
  });
} //*******************************************************************************//
// ************************** CONSTANTES PERFIL DE USUARIO **********************//
//*******************************************************************************//
// Constante acordeon perfil del usuario todas las ideas


var acordeon = document.getElementsByClassName('container-all-idea-user'); // Constantes boton editar datos 

var btnEdit = document.getElementById('btn-edit-user');
var panelEdit = document.getElementById('container-edit-datos'); //*******************************************************************************//
// ***************************** VARIABLES GENERALES *************************//
//*******************************************************************************//
//************* Variables del home ***************/

var statePower = false; //Boolean btn salir

var state = false; //Boolean mostrar mensaje
//*************** Variables perfil de usuario **************//

var panel = document.querySelectorAll('.list-allideas'); //Panel oculto de acordeon perfil del usuario

var varBol = false; //Boolean acordeon perfil del usuario

var stateEdit = false; //Boolean btn editar perfil del usuario
//*******************************************************************************//
// ***************************** FUNCIONES  *************************//
//*******************************************************************************//
// Funcion mostrar ideas en carrusel en el tablero de ideas

$(document).ready(function () {
  $('.owl-cards').owlCarousel({
    loop: true,
    margin: 5,
    nav: true,
    smartSpeed: 900,
    dots: false,
    autoplay: false,
    autoplayTimeout: 1000,
    //autoplayHoverPause:true,
    responsive: {
      0: {
        items: 1
      },
      767: {
        items: 2
      },
      1199: {
        items: 3
      },
      1285: {
        items: 4
      }
    }
  });
}); //*******************************************************************************//
// ***************************** VISTA DEL HOME EVENTOS *************************//
//*******************************************************************************//
//Evento para el boton salir

for (var _i = 0; _i < btnPowerof.length; _i++) {
  btnPowerof[_i].addEventListener('click', function () {
    if (statePower == false) {
      btnLogout.style.display = 'block';
      statePower = true;
    } else {
      btnLogout.style.display = 'none';
      statePower = false;
    }
  });
} //**************Chat ideas*************//
//Evento mostrar todo el mensaje en el chat de ideas


var _loop = function _loop(_i2) {
  btnSemoreMessage[_i2].addEventListener('click', function () {
    if (state == false) {
      paragraphMessageChat[_i2].style.whiteSpace = "normal";
      paragraphMessageChat[_i2].style.transitionDuration = "0.5s";
      state = true;
    } else {
      paragraphMessageChat[_i2].style.whiteSpace = "nowrap";
      paragraphMessageChat[_i2].style.transitionDuration = "0.5s";
      state = false;
    }
  });
};

for (var _i2 = 0; _i2 < btnSemoreMessage.length; _i2++) {
  _loop(_i2);
} //*******************************************************************************//
// ***************************** VISTA DEL PERFIL DEL USUARIO EVENTOS *************************//
//*******************************************************************************//
//Evento acordeon perfil del usuario


var _loop2 = function _loop2(_i3) {
  acordeon[_i3].addEventListener('click', function () {
    if (varBol == false) {
      //panel[i].classList.add("activa-user")
      panel[_i3].style.display = 'block';
      panel[_i3].style.transition = ' display 1s ease';
      varBol = true;
      console.log(panel[_i3]);
    } else {
      panel[_i3].style.display = 'none';
      panel[_i3].style.transition = 'display 1s ease';
      varBol = false;
      console.log(panel[_i3]);
    }
  });
};

for (var _i3 = 0; _i3 < acordeon.length; _i3++) {
  _loop2(_i3);
}

btnEdit.addEventListener('click', function () {
  if (stateEdit == false) {
    panelEdit.style.display = 'block';
    stateEdit = true;
  } else {
    panelEdit.style.display = 'none';
    stateEdit = false;
  }
}); // Funcion acordeon perfil del usuario
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