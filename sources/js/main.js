
const app = new Vue({
    el : "#app",
    data: {
        comments : {
            title: [],
            bodyMessage: []
        },
        message: [],
        newMessage: '',
        newName: 'Nombre de usuario',
        image: 'img/perfil/userPerfil.png',
        state: false
    },
    methods:{
        addComments(){
            this.message.push({
                comment: this.newMessage,
                names: this.newName,
                states: this.state,
                img: this.image
            })
            this.newMessage = ''
            this.newTitle = ''
        }
    }
})

const btnPowerof = document.getElementById('btnLogout')
const btnLogout = document.getElementById('btn-logout-off')
let statePower = false;
let state = false;


btnPowerof.addEventListener('click', () => {
    if(statePower == false){
       btnLogout.style.display = 'block'
       statePower = true 
    }
    else{
        btnLogout.style.display = 'none'
        statePower = false
    }
})


//**************Chat ideas*************/

//Mostrar todo el mensaje
const btnSemoreMessage = document.getElementsByClassName('btn-seemoremessage')
const paragraphMessageChat = document.getElementsByClassName('idea-message-chat-users')

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

// Carrusel de imagenes

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

// funcion acordeon perfil del usuario 
let acordeon = document.getElementsByClassName('container-all-idea-user')
//let panel = document.querySelectorAll('.list-allideas')
let varBol = false

for(let i = 0; i < acordeon.length; i++){
    acordeon[i].addEventListener('click', function(){
        this.classList.toggle('activa')
        let panel = this.nextElementSibling;
        if(panel.style.display === 'none'){
            panel.style.display = 'block'
        }
        else{
            panel.style.display = 'none'
        }
    })
}






