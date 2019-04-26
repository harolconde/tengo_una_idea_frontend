'use strict'


// ************************
//   Variables Constantes
// ************************

//Boton Cerrar sesion
const btnLogoutSesion = document.querySelector('.container-btn-logout')
const btnLogout = document.getElementById('btn-logout-off')

//popover me gusta
const btnPopovers = document.getElementsByClassName('btnLikeMyHeart')
const likePopovers = document.getElementsByClassName('votos') 

//Responder idea
const btnReply = document.getElementsByClassName('btnAddNewReply')
const layoutReply = document.getElementById('reply-message')
const inputReplyIdea = document.querySelector('.input-reply-idea')
const btnReplyIdea = document.getElementById('btn-reply-message')
const messageReply = document.getElementsByClassName('element-reply')
const id_idea = document.getElementsByClassName('id_idea_mas')

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

//Ideas respondidas


//Modal let
let ideaCopied = ' '
let showModalAll = false

let btnVote = document.getElementsByClassName('voting_like')



let btnVoteAdd = function(){
    for(let i = 0; i < btnVote.length; i++){
        console.log(btnVote[i]) 
    }
}

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

//Funcion mostrar popover
let showPopover = function(){
    for(let i = 0; i < btnPopovers.length; i++){
        btnPopovers[i].addEventListener('click', function(){
            likePopovers[i].classList.toggle('showPopover')
        })
    }
}
showPopover()
let resetReply = function(){
    document.querySelector('.input-reply-idea').value = ''
}
//Function resetear respuesta


//Funcion responder Mensaje
let replyMessage = function(){
    let indexLi =[btnReply]
    for(let item in indexLi){
        console.log(indexLi[item])
    }
    
    //console.log('Replicar mensaje')
    for(let i = 0; i < btnReply.length; i++){
        
        btnReply[i].addEventListener('click', function(){ 
            //console.log(btnReply[i])
            layoutReply.classList.toggle('reply-message-active')
            let valor = id_idea[i].innerText
            inputReplyIdea.value = valor
            btnReplyIdea.addEventListener('click', () => {
                //let myReply = []
                let idea = inputReplyIdea.value
                let elemCreated = document.createElement('li')
                elemCreated.setAttribute('class', 'replyAdded list-group-item')
                //myReply.push(idea)
                let indice = elemCreated
                elemCreated.innerHTML = //html
                `
                    <div class="replyAddedBody">
                        <p class="replyAddedParagraph">${idea}</p>
                        <div class="imgReplyAddedBody">
                            <img src="img/perfil/userAdmon.png" alt="">
                        </div>
                    </div>
                `
                messageReply[i].appendChild(elemCreated)
                
                //console.log(myReply)
                
            })
            
            
        })

        
        
    }
    
}
replyMessage()

//Funcion Mostrar Mensaje Respondido


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

