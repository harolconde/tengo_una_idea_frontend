'use strict'

console.log('Este es el home')

const btnPowerof = document.getElementById('btnLogout')
const btnLogout = document.getElementById('btn-logout-off')
let statePower = false; //Boolean btn salir

let showAllMesageChat = function(elem1, elem2){
    for(let i = 0; i < elem1.length; i++){
        elem1[i].addEventListener('click', () => {
            console.log('Salir')
            if(statePower == false){
               elem2.style.display = 'block'
               statePower = true 
            }
            else{
                elem2.style.display = 'none'
                statePower = false
            }
        })
    }
}
btnPowerof.addEventListener('click', showAllMesageChat(btnPowerof, btnLogout))

const myModal = document.getElementsByClassName('idea-aprovada')
const aprobadas = document.getElementById('section-modal')
const closeModal = document.getElementById('btn-close')
const ideaModal = document.getElementsByClassName('idea-message-chat-users')
const contentIdeaModal = document.getElementById('modal-body')
const parentDestroy = document.getElementById('para-destroy')

let ideaCopied = ' '
let showModalAll = false
let showModal = function(elem, modal, contentModal, contentModalCopy){
    for(let i = 0; i < elem.length; i++){
        elem[i].addEventListener('click', () => {
            if(showModalAll == false){
                modal.style.display = 'block'
                showModalAll = true
                ideaCopied =  `<span> ${contentModal[i].innerText} </span>`
                let element = document.createElement('P')
                element.setAttribute('id', 'para-destroy') 
                element.innerHTML = ideaCopied
                console.log(element)
                contentModalCopy.appendChild(element)

                console.log(element.length)

                contentIdeaModal.removeChild(parentDestroy)
                console.log(showModalAll)
            }
        })
    }
}

//Evento mostrar modal
for(let j = 0; j < myModal.length; j++){
    myModal[j].addEventListener('click', showModal(myModal, aprobadas, ideaModal, contentIdeaModal))
}

//Evento cerrar modal
closeModal.addEventListener('click', () => {  
    aprobadas.style.display = 'none'
    showModalAll = false
    console.log(contentIdeaModal)
       
})

