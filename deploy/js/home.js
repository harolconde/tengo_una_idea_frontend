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
let showModalAll = false
let showModal = function(){
    for(let i = 0; i < myModal.length; i++){
        myModal[i].addEventListener('click', () => {
            if(showModalAll == false){
                aprobadas.style.display = 'block'
                showModalAll = true
                console.log(showModalAll)
            }
        })
        closeModal.addEventListener('click', () => {
            aprobadas.style.display = 'none'
            showModalAll = false
            console.log(showModalAll)
        })
    }
}
showModal()


