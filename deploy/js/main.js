"use strict";

var btnPowerof = document.querySelectorAll('btnLogout');
var btnLogout = document.getElementById('btn-logout-off');
var statePower = false;
var state = false;

for (var i = 0; i < btnPowerof.length; i++) {
  btnPowerof[i].addEventListener('click', function () {
    if (statePower == false) {
      btnLogout.style.display = 'block';
      statePower = true;
    } else {
      btnLogout.style.display = 'none';
      statePower = false;
    }
  });
} //**************Chat ideas*************/
//Mostrar todo el mensaje


var btnSemoreMessage = document.getElementsByClassName('btn-seemoremessage');
var paragraphMessageChat = document.getElementsByClassName('idea-message-chat-users');

var _loop = function _loop(_i) {
  btnSemoreMessage[_i].addEventListener('click', function () {
    if (state == false) {
      paragraphMessageChat[_i].style.whiteSpace = "normal";
      paragraphMessageChat[_i].style.transitionDuration = "0.5s";
      state = true;
    } else {
      paragraphMessageChat[_i].style.whiteSpace = "nowrap";
      paragraphMessageChat[_i].style.transitionDuration = "0.5s";
      state = false;
    }
  });
};

for (var _i = 0; _i < btnSemoreMessage.length; _i++) {
  _loop(_i);
} // Carrusel de imagenes


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
}); // funcion acordeon perfil del usuario 

var acordeon = document.getElementsByClassName('container-all-idea-user');
var panel = document.querySelectorAll('.list-allideas');
var varBol = false;

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
}

var btnEdit = document.getElementById('btn-edit-user');
var panelEdit = document.getElementById('container-edit-datos');
var stateEdit = false;
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