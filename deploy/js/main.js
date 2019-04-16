'use strict';

console.warn('Ingresando'); //Evento para el boton salir

for (var i = 0; i < btnPowerof.length; i++) {
  btnPowerof[i].addEventListener('click', function () {
    console.log('Salir');

    if (statePower == false) {
      btnLogout.style.display = 'block';
      statePower = true;
    } else {
      btnLogout.style.display = 'none';
      statePower = false;
    }
  });
} //Constantes mostrar mensaje completo


var btnSemoreMessage = document.getElementsByClassName('btn-seemoremessage');
var paragraphMessageChat = document.getElementsByClassName('idea-message-chat-users');
var btnMinus = document.getElementsByClassName('iconMoreMinus');
var state = false; //Boolean mostrar mensaje
//Evento mostrar todo el mensaje en el chat de ideas

var _loop = function _loop(_i) {
  btnSemoreMessage[_i].addEventListener('click', function () {
    if (state == false) {
      paragraphMessageChat[_i].style.whiteSpace = "normal";
      paragraphMessageChat[_i].style.transitionDuration = "0.5s";

      btnMinus[_i].classList.remove('fa-plus');

      btnMinus[_i].classList.add('fa-minus');

      state = true;
    } else {
      paragraphMessageChat[_i].style.whiteSpace = "nowrap";
      paragraphMessageChat[_i].style.transitionDuration = "0.5s";

      btnMinus[_i].classList.remove('fa-minus');

      btnMinus[_i].classList.add('fa-plus');

      state = false;
    }
  });
};

for (var _i = 0; _i < btnSemoreMessage.length; _i++) {
  _loop(_i);
} //Constantes mostrar popover me gusta


var btnLike = document.getElementsByClassName('iconLike'); // Constante acordeon perfil del usuario todas las ideas

var acordeon = document.getElementsByClassName('container-all-idea-user');
var panel = document.querySelectorAll('.list-allideas'); //Panel oculto de acordeon perfil del usuario

var varBol = false; //Boolean acordeon perfil del usuario
//Evento acordeon perfil del usuario

var _loop2 = function _loop2(_i2) {
  acordeon[_i2].addEventListener('click', function () {
    if (varBol == false) {
      //panel[i].classList.add("activa-user")
      panel[_i2].style.display = 'block';
      panel[_i2].style.transition = ' display 1s ease';
      varBol = true;
      console.log(panel[_i2]);
    } else {
      panel[_i2].style.display = 'none';
      panel[_i2].style.transition = 'display 1s ease';
      varBol = false;
      console.log(panel[_i2]);
    }
  });
};

for (var _i2 = 0; _i2 < acordeon.length; _i2++) {
  _loop2(_i2);
} // Funcion mostrar ideas en carrusel en el tablero de ideas


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
});