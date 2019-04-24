'use strict'


// ************************
//   Variables Constantes
// ************************

//Boton Cerrar sesion
const btnLogoutSesion = document.querySelector('.container-btn-logout')
const btnLogout = document.getElementById('btn-logout-off')

//Responder idea
const btnReply = document.getElementsByClassName('answer-message-cont')
const layoutReply = document.getElementById('reply-message')
const inputReplyIdea = document.querySelector('.input-reply-idea')
const btnReplyIdea = document.getElementById('btn-reply-message')
const messageReply = document.getElementsByClassName('element-reply')

//Modal const
const myModal = document.getElementsByClassName('idea-aprovada')
const aprobadas = document.getElementById('section-modal')
const closeModal = document.getElementById('btn-close')
//const ideaModal = document.getElementsByClassName('idea-message-chat-users')
const contentIdeaModal = document.getElementById('modal-body')

// ***********************
//     Variables let
// ***********************


//Boton salir
let statePower = false; //Boolean btn salir

//Modal let
let ideaCopied = ' '
let showModalAll = false

let btnVote = document.getElementsByClassName('voting_like')

let btnVoteAdd = function(){
    for(let i = 0; i < btnVote.length; i++){
        console.log(btnVote[i]) 
    }
}
btnVoteAdd()
// ***********************
//        Funciones
// ***********************


//Funcion mostrar cerrar sesion
let showlogout = function(){
    if(statePower == false){
        btnLogout.style.display = 'block'
        statePower = true
    }
    else{
        btnLogout.style.display = 'none'
        statePower = false
    }
}

//Funcion responder Mensaje
let replyMessage = function(){
    console.log('Replicar mensaje')
    for(let i = 0; i < btnReply.length; i++){
        btnReply[i].addEventListener('click', function(){
            layoutReply.classList.toggle('reply-message-active')
            btnReplyIdea.addEventListener('click', () => {
                console.log()
                let idea = inputReplyIdea.value
                messageReply[i].innerHTML += //html
                `
                    <li>${idea}</li>
                `
            })
        })
    }
}
replyMessage()

//Funcion Mostrar Mensaje Respondido
// let showReplyMessage = function(){
//     inputReplyIdea.value
// }

//Funcion mostrar modal
let showModal = function(elem, modal, contentModalCopy){
    
    for(let i = 0; i < elem.length; i++){
        elem[i].addEventListener('click', () => {
            if(showModalAll == false){
                modal.style.display = 'block'
                showModalAll = true
                ideaCopied =  `<span> ${elem[i].innerText} </span>`
                let element = document.createElement('P')
                element.setAttribute('class', 'para-destroy') 
                element.innerHTML = ideaCopied
                contentModalCopy.appendChild(element)
            }
        })
    }
}

//Funcion ocultar modal
let hideModal = function(){
    let parentDestroy =  contentIdeaModal.firstElementChild
    aprobadas.style.display = 'none'
    aprobadas.style.transition = 'all .5s ease-in-out'
    showModalAll = false
    contentIdeaModal.removeChild(parentDestroy)
}


// ***********************
//        Eventos
// ***********************

//Evento cerrar session
btnLogoutSesion.addEventListener('click', showlogout)

//Evento responder idea
//btnReplyIdea.addEventListener('click', showReplyMessage)

//Evento mostrar modal
for(let j = 0; j < myModal.length; j++){
    myModal[j].addEventListener('click', showModal(myModal, aprobadas, contentIdeaModal))
}

//Evento cerrar modal
closeModal.addEventListener('click', hideModal)

