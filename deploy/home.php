<?php
session_start();
if(!isset($_SESSION["id_user"]) || $_SESSION["id_user"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
    }
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

<html>
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>.: HOME :.</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
    </head>
	<body>

        <!-- ************* Contenedor principal de la aplicacion ************* -->
        <div id="app" class="container-g-home">

            <!-- Barra de navegacion vistas moviles de la aplicacion -->

            <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
                <div class="dates-user-mobil ">
                    <div class="img-user-perfil-mobil">
                        <img src="img/perfil/userAdmon.png" alt="" width>
                    </div>
                    <div class="container-name-user-mobil">
                        <span>
                            Nombre de usuario
                        </span>
                    </div>
                </div>
                <button class="navbar-toggler float-right btn-hamburguer" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav list-group list-group-flush">
                        <li class="nav-item active list-group-item">
                            <a class="nav-link" href="#">Chat de ideas <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item list-group-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item list-group-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- **************** Contenedor del chat de ideas **************** -->

            <div class="container-chat">
                <div class="container-g-chat">
                    <div class="wel row">
                        <div class="container-img-user col-4">
                            <img src="img/perfil/userAdmon.png" alt="" width>
                        </div>
                        <div id="login" align="left" class="container-dates-user-active col-8">
                            <!-- <p>ID de Cuenta: 
                                <b><?php 
                                    echo $_SESSION["id_user"];
                                ?></b>
                            .</p>  -->
                            <span><?php    
                                    $usuario = $_SESSION["id_user"];
                                    $mostrarususario = mysqli_query($conexion, "SELECT first_name, last_name FROM users WHERE id_user='$usuario'");
                                    mysqli_data_seek ($mostrarususario, 0);

                                    $extraido= mysqli_fetch_array($mostrarususario);
                                    echo $extraido['first_name']." ".$extraido['last_name'].'<br/>';
                                    
                                 ?>   </span>

                             <span>
                             <?php    
                                    $usuario = $_SESSION["id_user"];
                                    $mostrarususario = mysqli_query($conexion, "SELECT email FROM users WHERE id_user=$usuario");
                                    mysqli_data_seek ($mostrarususario, 0);

                                    $extraido= mysqli_fetch_array($mostrarususario);
                                    echo $extraido['email'].'<br/>';
                                    
                                 ?>
                                 </span>
                            <span>Tus ideas <i></i></span>
                        </div>
                    </div>
                </div>
                <div class="title-chat-ideas text-center p-2">
                    <span class="h5 ">
                        Chat de ideas
                    </span>
                </div>
                <div class="container-chats-ideas">	
                    <!--<button><a href="php/todos.php">Todos los usuarios registrados</a></button> -->
                    <div class="container-all-new-chat p-2">
                        <div class="contenedor">
                            <?php
                            require_once("config.php");
                            $posts=$db->query("SELECT * FROM ideas order by f_creacion desc");
                            if ($filas=$posts->fetch_array())
                            {
                                do
                                {
                                ?>
                                <div class="contatiner-idea-credentials">
                                    <div class="img-user-in-chat">
                                        <img v-bind:src="image" alt="">
                                    </div>
                                    <div class="container-name-votes">
                                        <h3 class="name-user-idea"><?php echo utf8_encode($filas["id_user"]); 
                                        
                                        ?> 
                                            <?php    
                                                $usuario = $_SESSION["id_user"];
                                                $mostrarususario = mysqli_query($conexion, "SELECT first_name, last_name FROM users WHERE id_user=$id_creador");
                                                 mysqli_data_seek ($mostrarususario, 0);

                                                $extraido= mysqli_fetch_array($mostrarususario);
                                                echo $extraido['first_name']." ".$extraido['last_name'].'<br/>';
                                        ?>
                                        
                                        
                                        
                                        </h3>
                                        <ul class="votos">
                                            <li class="voting_btn up_button" data-voto="votos" data-id="<?php echo $filas["id_Idea"]; ?>">
                                                <i class="fas fa-thumbs-up like"></i>
                                                <span><?php echo $filas["votos"]; ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="idea-message-chat-users" id="idea-message-chat-users"><?php echo utf8_encode($filas["argumento"]); ?></p>
                                    <button class="btn btn-block btn-seemoremessage" id="btn-seemoremessage">Ver <i class="fas fa-plus"></i></button>
                                    
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
                <div class="see-all-ideas">
                    <div class="icon-see-more-ideas">
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <div class="see-all-ideas-link">
                        <a href="" class="link" id="link-see-all-Ideas">Ver todas</a>
                    </div>
                </div>
                <div class="write-message-mobil w-100 container fixed-bottom">
                    <div class="row row-write-message-mobil">
                        <div class="col-10 textarea">
                            <div class="form-group container-textarea-mobil">
                                <!-- <input class="title-idea-mobil" v-model="newTitle" type="text" name="" id="" placeholder="Titulo idea"> -->
                                <textarea class="form-control" v-model="newMessage" rows="5" id="comment" placeholder="Cual es tud idaea?"></textarea>
                            </div>
                            <!-- <div class="container-write-idea">
                                    <div class="container-idea-general row">
                                        <div class="col-auto container-write-idea-board">
                                            <label class="sr-only" for="inlineFormInputGroup">Cual es tu idea?</label>
                                            <div class="input-group group-message-send mb-2">
                                                <form action="procesar_mensaje.php" method="POST" class="form-New-Message">
                                                    <textarea name="" id="" cols="30" rows="10" class="space-whrite-idea" v-model="newMessage" class="form-control" id="inlineFormInputGroup" placeholder="Cual es tu idea?" name="argumento"></textarea>
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <button class="btn btn-plus-idea" @click="addComments" type="submit" value="Enviar Comentario" >
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                        </div>
                        <div class="col2 btn-send-message-mobil">
                            <button class="btn btn-send-mobil" @click="addComments">
                                <i class="fas fa-plus-square"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- *** Contenedor derecho de las vistas Home, todas las ideas, ideas muertas y finalizadas *** -->

            <div class="container-board-home" id="container-board-home">
                <section class="section-write-ideas">
                    <div class="container container-ideas">
                        <div class="row">
                            <div class="col-1 "></div>
                            <div class="col-10">
                                <div class="container-write-idea">
                                    <div class="container-idea-general row">
                                        <div class="col-auto container-write-idea-board">
                                            <label class="sr-only" for="inlineFormInputGroup">Cual es tu idea?</label>
                                            <div class="input-group group-message-send mb-2">
                                                <form action="procesar_mensaje.php" method="POST" class="form-New-Message">
                                                    <textarea name="" id="" cols="30" rows="10" class="space-whrite-idea" v-model="newMessage" class="form-control" id="inlineFormInputGroup" placeholder="Cual es tu idea?" name="argumento"></textarea>
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <button class="btn btn-plus-idea" @click="addComments" type="submit" value="Enviar Comentario" >
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 column-logout">
                                <i class="fas fa-power-off logout-icon" id="btnLogout"></i>
                                <div class="btn btn-logout" id="btn-logout-off">
                                    <button class="btn-i-logout"><a href="./php/logout.php">Salir</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- ************* contenedor de las post its ************* -->

                <section class="section-post">
                    <div class="container-post-it">
                        <div class="row row-post">
                            <div class="col-1"></div>
                            <div class="col-10 container-box-post">       
                                <div class="box-cards">
                                    <div class="title-cards-idea"> <span class="span-title-cards-ideas">Las ideas mas votadas</span> </div>
                                    <div class="owl-carousel owl-cards owl-theme">

                                    <?php
                                        require_once("config.php");
                                        $posts=$db->query("SELECT * FROM ideas order by votos desc");
                                        if ($filas=$posts->fetch_array())
                                        {
                                            do
                                            {
                                            ?>
                                            <div class="item item-cards card-postuled">
                                                <!-- <div class="img-user-in-chat">
                                                    <img v-bind:src="image" alt="">
                                                </div> -->
                                                <div class="container-name-votes item-card-idea">
                                                    <!-- <h3 class="name-user-idea"><?php echo utf8_encode($filas["id_user"]); ?> {{newName}}</h3> -->
                                                    <i class="material-icons liston">turned_in_not</i>
                                                    <span><?php echo $filas["votos"]; ?></span>
                                                    <!-- <ul class="votos">
                                                        <li class="voting_btn up_button" data-voto="votos" data-id="<?php echo $filas["id_Idea"]; ?>">
                                                            <i class="fas fa-thumbs-up like"></i>
                                                            <span><?php echo $filas["votos"]; ?></span>
                                                        </li>
                                                    </ul> -->
                                                </div>
                                                <p class="idea-message-chat-users" id="idea-message-chat-users" data-toggle="modal" data-target="#exampleModalScrollable"><?php echo utf8_encode($filas["argumento"]); ?></p>
                                                <button class="btn-item-card btn btn-block voting_btn up_button" data-voto="votos" data-id="<?php echo $filas["id_Idea"]; ?>">Votar</button>
                                                
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                    </div>
                                                </div>
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
                                <!-- Card ideas aprobadas -->
                                <div class="box-cards">
                                    <div class="title-cards-idea"><span class="span-title-cards-ideas">Ideas en proceso de aprobación</span></div>
                                    <div class="owl-carousel owl-cards owl-theme ">
                                        <?php
                                            require_once("config.php");
                                            $posts=$db->query("SELECT * FROM ideas where estado='comite' order by f_creacion desc");
                                            if ($filas=$posts->fetch_array())
                                            {
                                                do
                                                {
                                                ?>
                                                <div class="item item-cards card-postuled">
                                                    <!-- <div class="img-user-in-chat">
                                                        <img v-bind:src="image" alt="">
                                                    </div> -->
                                                    <div class="container-name-votes item-card-idea">
                                                        <!-- <h3 class="name-user-idea"><?php echo utf8_encode($filas["id_user"]); ?> {{newName}}</h3> -->
                                                        <i class="material-icons liston">turned_in_not</i>
                                                        <span><?php echo $filas["votos"]; ?></span>
                                                        <!-- <ul class="votos">
                                                            <li class="voting_btn up_button" data-voto="votos" data-id="<?php echo $filas["id_Idea"]; ?>">
                                                                <i class="fas fa-thumbs-up like"></i>
                                                                <span><?php echo $filas["votos"]; ?></span>
                                                            </li>
                                                        </ul> -->
                                                    </div>
                                                    <p class="idea-message-chat-users" id="idea-message-chat-users" data-toggle="modal" data-target="#exampleModalScrollable"><?php echo utf8_encode($filas["argumento"]); ?></p>
                                                    <!-- <button class="btn-item-card btn btn-block voting_btn up_button" data-voto="votos" data-id="<?php echo $filas["id_Idea"]; ?>">Votar</button> -->
                                                    
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                        </div>
                                                    </div>
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
                                <div class="box-cards">
                                    <div class="title-cards-idea"><span class="span-title-cards-ideas">Ideas aprobadas</span></div>
                                    <div class="owl-carousel owl-cards owl-theme">
                                        <div class="item item-cards card-aproved"><h4>1</h4></div>
                                        <div class="item item-cards card-aproved"><h4>2</h4></div>
                                        <div class="item item-cards card-aproved"><h4>3</h4></div>
                                        <div class="item item-cards card-aproved"><h4>4</h4></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1"> </div>
                        </div>
                    </div>
                </section>

                <!-- ********** Botones ideas finalizadas y muertas ********** -->

                <section class="section-ideas-df">
                    <div class="container container-i-df row">
                        <div class="col-1"></div>
                        <div class="link-i-finish box-links-i col-5 ">
                            <div class="i-finish i-id-board">
                                <a href="" class="ideas-finish">Ideas finalizadas</a>
                            </div>
                        </div>
                        <div class="link-i-dead box-links-i col-5 ">
                            <div class="i-dead i-id-board">
                                <a href="" class="ideas-dead">Ideas muertas</a>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>

                </section>
                
                <!-- *************** Footer ************** -->

                <section class="section-footer">
                    <div class="container container-footer ">
                        <hr>
                        <div class="footer-dates-copy">
                            <span>correo@novatec.com.co</span>
                            <span>&copy 2019 Novatec Solutions, todos los derechos reservados</span>
                        </div>
                    </div>
                </section>
            </div>
        </div> 
    </div>
    <div id="output"></div>

    <script src="js/vue.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> -->
<script type="text/javascript">

    $('').on('click', function(){
        $('#exampleModalScrollable').modal('toggle')
    })



    $(document).ready(function() 
    {
        $(".votos .voting_btn").click(function (e) 
        {
            e.preventDefault();
            var voto_hecho = $(this).data('voto');
            var id = $(this).data("id"); 
            var li = $(this);
            
            if(voto_hecho && id)
            {
                $.post('ajax_voto.php', {'id':id, 'voto':voto_hecho}, function(data) 
                {
                    if (data!="voto_duplicado") 
                    {
                        li.addClass(voto_hecho+"_votado").find("span").text(data);
                        li.closest("ul").append("<span class='votado'>Gracias!</span>");
                    }
                    else li.closest("ul").append("<span class='votado'>Ya has votado!</span>");
                });
                setTimeout(function() {$('.votado').fadeOut('fast');}, 3000);
            }
        });
    });


    // Templates pagina home, todas la ideas, ideas finalizadas y muertas

    
    let statusItem = false

    let itemCollapse = function(){
        for(let i = 0; i < btnShowAllIdea.length; i++){
            btnShowAllIdea[i].addEventListener('click', () => {
                if(statusItem == false){
                    textAllIdeas[i].style.whiteSpace = 'normal'
                    statusItem = true
                    console.log(statusItem)   
                }
                else{
                    textAllIdeas[i].style.whiteSpace = 'nowrap'
                    statusItem = false
                    console.log(statusItem)
                }        

            })
           
        }
    }

    const home = document.getElementById('container-board-home')
    const allIdeas = document.getElementById('link-see-all-Ideas')


        

    // Template todas las ideas
    allIdeas.addEventListener('click', function(e){
        e.preventDefault()
        let content = 
            `
                <div class="app2">
                    <section class="section-return container>
                        <div class="row">
                            <div class="col-12 container-link-return p-2">
                                <a href="" class="link"><i class="fas fa-arrow-left"></i> Volver al inicio</a>
                            </div>
                        </div>
                    </section>
                    <section class="section-all-users-all-ideas container">
                        <div class="row">
                            <div class="col-12">
                                <div class=" contenedor-all-ideas ">
                                    <div class="card-columns">
                                        <?php
                                            require_once("config.php");
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
                                                        <h3 class="name-user-idea"><?php echo utf8_encode($filas["id_user"]); ?> Nombre de usuario</h3>
                                                        <ul class="votos">
                                                            <li class="voting_btn up_button" data-voto="votos" data-id="<?php echo $filas["id_Idea"]; ?>">
                                                                <i class="fas fa-thumbs-up like"></i>
                                                                <span><?php echo $filas["votos"]; ?></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <p class="idea-message-chat-users all-message-all-users" id="idea-message-chat-users"><?php echo utf8_encode($filas["argumento"]); ?></p>
                                                    <button class="btn btn-block btn-seemoremessage  btn-seemoremessage-template" id="btn-seemoremessage-template">Ver <i class="fas fa-plus"></i></button>
                                                    
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

            const btnShowAllIdea = document.getElementsByClassName('btn-seemoremessage-template')
            const textAllIdeas = document.querySelectorAll('.all-message-all-users')
            //let stateMessage = false


            for(let i = 0; i < btnShowAllIdea.length; i ++){
                btnShowAllIdea[i].addEventListener('click', ()=> {
                    if(statusItem == false){
                        textAllIdeas[i].style.whiteSpace = 'normal'
                        statusItem = true
                        console.log(statusItem)   
                    }
                    else{
                        textAllIdeas[i].style.whiteSpace = 'nowrap'
                        statusItem = false
                        console.log(statusItem)
                    }     
                })

            }

            let elem = document.querySelector('.grid');
            let msnry = new Masonry( elem, {
            // options
                itemSelector: '.grid-item',
                columnWidth: 10
            })

        }
    )

        
        

</script>
    
  </body>
</html>