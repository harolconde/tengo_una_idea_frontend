'use strict'; //Constantes mostrar mensaje completo

var btnSemoreMessage = document.getElementsByClassName('btn-seemoremessage');
var paragraphMessageChat = document.getElementsByClassName('idea-message-chat-users');
var btnMinus = document.getElementsByClassName('iconMoreMinus');
var state = false; //Boolean mostrar mensaje
//Evento mostrar todo el mensaje en el chat de ideas

var _loop = function _loop(i) {
  btnSemoreMessage[i].addEventListener('click', function () {
    if (state == false) {
      paragraphMessageChat[i].style.whiteSpace = "normal";
      paragraphMessageChat[i].style.transitionDuration = "0.5s";
      btnMinus[i].classList.remove('fa-plus');
      btnMinus[i].classList.add('fa-minus');
      state = true;
    } else {
      paragraphMessageChat[i].style.whiteSpace = "nowrap";
      paragraphMessageChat[i].style.transitionDuration = "0.5s";
      btnMinus[i].classList.remove('fa-minus');
      btnMinus[i].classList.add('fa-plus');
      state = false;
    }
  });
};

for (var i = 0; i < btnSemoreMessage.length; i++) {
  _loop(i);
} //Constantes mostrar popover me gusta


var btnLike = document.getElementsByClassName('iconLike'); // Constante acordeon perfil del usuario todas las ideas

var acordeon = document.getElementsByClassName('container-all-idea-user');
var panel = document.querySelectorAll('.list-allideas'); //Panel oculto de acordeon perfil del usuario

var varBol = false; //Boolean acordeon perfil del usuario
//Evento acordeon perfil del usuario

var _loop2 = function _loop2(i) {
  acordeon[i].addEventListener('click', function () {
    if (varBol == false) {
      //panel[i].classList.add("activa-user")
      panel[i].style.display = 'block';
      panel[i].style.transition = ' display 1s ease';
      varBol = true;
      console.log(panel[i]);
    } else {
      panel[i].style.display = 'none';
      panel[i].style.transition = 'display 1s ease';
      varBol = false;
      console.log(panel[i]);
    }
  });
};

for (var i = 0; i < acordeon.length; i++) {
  _loop2(i);
} // Funcion mostrar ideas en carrusel en el tablero de ideas


$(document).ready(function () {
  $('.owl-cards').owlCarousel({
    //loop:true,
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