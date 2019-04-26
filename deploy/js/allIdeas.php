<?php
@session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
    print "<script>alert(\"Acceso invalido!\");";
    header('Location: index.php');
}

// session_start();
// if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
// 	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
//     }
?>
<?php
    $host_db="localhost";
    $user_db="root";
    $pass_db="";
    $bd_name="db_novatecideas";
    $tabla="users";
 
    $conexion=new mysqli($host_db, $user_db, $pass_db, $bd_name);
    if ($conexion -> connect_error) {
        die("La conexion fallo". $conexion -> connect_error);
    }
?>


'use strict'

const home = document.getElementById('container-board-home')
const allIdeas = document.getElementById('link-see-all-Ideas') //Todas las ideas

// Template todas las ideas
        allIdeas.addEventListener('click', function(e){
            e.preventDefault()
            let content = //html
                `
                    <div class="app2">
                        <section class="section-return container>
                            <div class="row">
                                <div class="col-6 container-link-return p-2">
                                    <a href="" class="link"><i class="fas fa-arrow-left"></i> Volver al inicio</a>
                                </div>
                                <div class="search col-6">
                                    <div class="col-auto container-write-idea-board">
                                        <div class="input-group group-message-send mb-2">
                                            <!-- <form action="" method="POST" class="form-New-Message"> -->
                                            <div class="input-group input-group-search">
                                                
                                                <input type="search" class="form-control inputFilterSearch" id="inputFilterSearch" placeholder="Buscar idea por usuario" aria-label="Username" aria-describedby="basic-addon1">
                                                <div class="input-group-prepend" id="btnFilterSearch">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                                                </div>
                                            </div>
                                            <!-- </form> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section-all-users-all-ideas container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="" id="container-result-filter" class="container-result-filter">
                                        
                                    </div>
                                    <div class=" contenedor-all-ideas ">
                                        <div class="card-columns container-all-ideas-div" >
                                            <?php
                                                require_once("../config.php");
                                                $posts=$db->query("SELECT * FROM ideas order by votos desc");
                                                if ($filas=$posts->fetch_array())
                                                {
                                                    do
                                                    {
                                                    ?>
                                                    <div class="contatiner-idea-credentials card">
                                                        <div class="img-user-in-chat">
                                                            <img src="img/perfil/userPerfil.png" alt="">
                                                        </div>
                                                        <div class="container-name-votes">
                                                            <h3 class="name-user-idea "><!--<?php echo ($filas["id_user"]);
                                                            $id_creador=$filas["id_user"];
                                                            ?>-->
                                                            <?php
                                                            $usuario = $_SESSION["id_user"];
                                                            $mostrarususario = mysqli_query($conexion, "SELECT first_name, last_name FROM users WHERE id_user=$id_creador");
                                                            mysqli_data_seek ($mostrarususario, 0);

                                                            $extraido= mysqli_fetch_array($mostrarususario);
                                                            echo '<span class="name-user-all-idea">'. $extraido['first_name']." ".$extraido['last_name'].'</span>'.'<br/>';
                                                            ?>
                                                                <ul class="container-btns-likes-dslike">
                                                                    <li>
                                                                        
                                                                        
                                                                        <i class="fas fa-heart iconLike" data-container="body"  data-toggle="popover" data-placement="right" data-content=' 
                                                                            <ul class="votos">
                                                                                <li class="voting_btn up_button" data-voto="votos" data-id="<?php echo $filas["id_user"]; ?>">
                                                        
                                                                                    <i class="far fa-smile-beam like face"></i>
                                                                                    <span><?php echo $filas["votos"]; ?></span>
                                                                                </li>
                                                                                <li class="voting_btn up_button" data-voto="votos" data-id="<?php echo $filas["id_user"]; ?>">
                                                                                
                                                                                    <i class="far fa-frown like face"></i>
                                                                                    <span>0</span>
                                                                                </li>
                                                                                <li class="voting_btn up_button" data-voto="votos" data-id="<?php echo $filas["id_user"]; ?>">
                                                                                
                                                                                    <i class="far fa-meh like face"></i>
                                                                                    <span>0</span>
                                                                                </li>
                                                                            </ul>
                                                                            '>
                                                                        </i>
                                                                        <span><?php echo $filas["votos"]; ?></span>
                                                                    </li>
                                                                </ul>
                                                            </h3>
                                                        </div>
                                                        <p class="idea-message-chat-users all-message-all-users" id="idea-message-chat-users"><?php echo utf8_encode($filas["argumento"]); ?></p>
                                                        <button class="btn btn-block btn-seemoremessage  btn-seemoremessage-template btn-seemoremessage-template-all" id="btn-seemoremessage-template">Ver <i class="fas fa-plus iconMoreMinus iconMoreMinus-all"></i></button>
                                                        <div class="container-display-reply">
                                                            <ul class="list-reply">
                                                            
                                                            </ul>
                                                        </div>
                                                        
                                                    </div>
                                                
                                                    <?php
                                                    }
                                                    while($filas=$posts->fetch_array());
                                                }
                                                else echo "<h3>No hay entradas disponibles.</h3>";
                                            ?>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </section>
                        
                    </div>
                `
                
                home.innerHTML = content;

                const btnShowAllIdea = document.querySelectorAll('div  .btn-seemoremessage-template-all')//Mensajes
                const textAllIdeas = document.getElementsByClassName('all-message-all-users')// Texto
                const iconAllIdeas = document.getElementsByClassName('iconMoreMinus-all')//icono
                const inputFilter = document.querySelector('#inputFilterSearch')// filtro de busqueda;
                const btnSearch = document.getElementById('btnFilterSearch') // Boton filtro de busqueda
                const nameUsers = document.querySelectorAll('div .name-user-all-idea') // Array de usuarios
                const result = document.getElementById('container-result-filter')
                
                console.log(btnShowAllIdea)
                let statusMessage = false

                let filterUserIdea = function(){                                       
                    let texto = inputFilter.value.toLowerCase()
                    let contenido = ''
                    for(let name = 0; name < nameUsers.length; name++){
                        let user = nameUsers[name].innerText.toLowerCase();
                        if(user.indexOf(texto) !== -1){
                            let element = nameUsers[name].parentElement.parentElement.parentElement
                            contenido +=  element.outerHTML
                            //console.log(element)
                        }
                    }
                    result.innerHTML = contenido
                    if(result === ' '){
                        result.innerHTML = `<li>Usuario no encontrado</li>`
                    }
                }
                //Llamada a la funcion mostrar todos los mensajes
                    for(let i = 0; i < btnShowAllIdea.length; i++){
                        
                        btnShowAllIdea[i].addEventListener('click', () => {
                            console.log(btnShowAllIdea[i])
                            if(statusMessage == false){
                                textAllIdeas[i].style.whiteSpace = 'normal'
                                iconAllIdeas[i].classList.remove('fa-plus')
                                iconAllIdeas[i].classList.add('fa-minus')
                                statusMessage = true
                            }
                            else{
                                textAllIdeas[i].style.whiteSpace = 'nowrap'
                                iconAllIdeas[i].classList.remove('fa-minus')
                                iconAllIdeas[i].classList.add('fa-plus')
                                statusItem = false
                            }
                        })
                    }
                filterUserIdea()
                btnSearch.addEventListener('click', filterUserIdea)
                inputFilter.addEventListener('keyup', filterUserIdea)
                

              
                

                // let elem = document.querySelector('.grid');
                // let msnry = new Masonry( elem, {
                // // options
                //     itemSelector: '.grid-item',
                //     columnWidth: 10
                // })

                $(document).ready(function(){
                    $('[data-toggle="popover"]').popover({ html : true, container : ".container-g-home" })
                })

            }
        )