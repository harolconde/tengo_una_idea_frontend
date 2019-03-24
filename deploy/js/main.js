"use strict";

var app = new Vue({
  el: "#app",
  data: {
    comments: {
      title: [],
      bodyMessage: []
    },
    message: [],
    newMessage: '',
    newName: 'Nombre de usuario',
    image: 'img/perfil/userPerfil.png',
    state: false
  },
  methods: {
    addComments: function addComments() {
      this.message.push({
        comment: this.newMessage,
        names: this.newName,
        states: this.state,
        img: this.image
      });
      this.newMessage = '';
      this.newTitle = '';
    }
  }
});
var btnPowerof = document.getElementById('btnLogout');
var btnLogout = document.getElementById('btn-logout-off');
var statePower = false;
var state = false;
btnPowerof.addEventListener('click', function () {
  if (statePower == false) {
    btnLogout.style.display = 'block';
    statePower = true;
  } else {
    btnLogout.style.display = 'none';
    statePower = false;
  }
}); //**************Chat ideas*************/
//Mostrar todo el mensaje

var btnSemoreMessage = document.getElementsByClassName('btn-seemoremessage');
var paragraphMessageChat = document.getElementsByClassName('idea-message-chat-users');

var _loop = function _loop(i) {
  btnSemoreMessage[i].addEventListener('click', function () {
    if (state == false) {
      paragraphMessageChat[i].style.whiteSpace = "normal";
      paragraphMessageChat[i].style.transitionDuration = "0.5s";
      state = true;
    } else {
      paragraphMessageChat[i].style.whiteSpace = "nowrap";
      paragraphMessageChat[i].style.transitionDuration = "0.5s";
      state = false;
    }
  });
};

for (var i = 0; i < btnSemoreMessage.length; i++) {
  _loop(i);
} // Carrusel de imagenes


$(document).ready(function () {
  $('.owl-cards').owlCarousel({
    loop: true,
    margin: 5,
    nav: true,
    dots: false,
    autoplay: false,
    autoplayTimeout: 1000,
    //autoplayHoverPause:true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 4
      }
    }
  });
}); // funcion acordeon perfil del usuario 

var acordeon = document.getElementsByClassName('container-all-idea-user'); //let panel = document.querySelectorAll('.list-allideas')

var varBol = false;

for (var i = 0; i < acordeon.length; i++) {
  acordeon[i].addEventListener('click', function () {
    this.classList.toggle('activa');
    var panel = this.nextElementSibling;

    if (panel.style.display === 'none') {
      panel.style.display = 'block';
    } else {
      panel.style.display = 'none';
    }
  });
}