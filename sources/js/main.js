
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

let btnPowerof = document.getElementById('btnLogout')
let btnLogout = document.getElementById('btn-logout-off')
let state = false;


btnPowerof.addEventListener('click', () => {
    if(btnLogout.style.display = 'none'){
       btnLogout.style.display = 'block' 
    }
    if(btnLogout.style.display = 'block' ){
        btnLogout.style.display = 'none'
    }
})

//Template board de ideas
// const btnLinksTemplate = document.getElementsByClassName('ideas-link-template')

// let showIdeas = function(){
//     for(let i = 0; i < btnLinksTemplate.length; i++){

//         btnLinksTemplate[i].addEventListener('click', function(e){
//             e.preventDefault()
//             console.log(this)
//         })
//     }
// }





// Carrusel de imagenes

$(document).ready(function(){

    $('.owl-cards').owlCarousel({
        loop:true,
        margin: 5,
        nav:true,
        dots: false,
        autoplay:false,
        autoplayTimeout:1000,
        //autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
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






