
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
const btnLinksTemplate = document.getElementsByClassName('ideas-link-template')

let showIdeas = function(){
    for(let i = 0; i < btnLinksTemplate.length; i++){
        btnLinksTemplate.addEventListener('click', function(e){
            e.preventDefault
            console.log(this)
        })
    }
}





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


