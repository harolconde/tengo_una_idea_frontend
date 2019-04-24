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

<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>.: HOME :.</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/fontawesome-5.8.1/all.css">
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
                            <img src="img/perfil/userPerfil.png" alt="">
                        </div>
                        <div id="login" align="left" class="container-dates-user-active col-8">
                            <!-- <p>ID de Cuenta: 
                                <b><?php 
                                    echo $_SESSION["user_id"];
                                ?></b>
                            .</p>  -->
                            <span class="name-credentials"> 
                            <?php
                                
                                $usuario = $_SESSION["user_id"];
                                
                                $mostrarususario = mysqli_query($conexion, "SELECT first_name, last_name FROM users WHERE id_user='$usuario'");
                                mysqli_data_seek ($mostrarususario, 0);
                                $extraido= mysqli_fetch_array($mostrarususario);
                                echo $extraido['first_name']." ".$extraido['last_name'].'<br/>';
                                
                                ?>
                            </span>
                            <span>
                                <span class="email-credentials"> 
                                <?php
                                $usuario = $_SESSION["user_id"];
                                $mostrarususario = mysqli_query($conexion, "SELECT email FROM users WHERE id_user=$usuario");
                                mysqli_data_seek ($mostrarususario, 0);
                                $extraido= mysqli_fetch_array($mostrarususario);
                                echo $extraido['email'].'<br/>';
                                
                                ?>
                                
                                </span>
                            </span>
                            <a href="home_user.php"><span>Perfil <i></i></span></a>
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
                                <img src="img/perfil/userPerfil.png" alt="">
                            </div>
                            <div class="container-name-votes">
                                <h3 class="name-user-idea"><!--<?php echo ($filas["id_user"]);
                                $id_creador=$filas["id_user"];
                                ?>-->
                                <?php
                                $usuario = $_SESSION["id_user"];
                                $mostrarususario = mysqli_query($conexion, "SELECT first_name, last_name FROM users WHERE id_user=$id_creador");
                                mysqli_data_seek ($mostrarususario, 0);

                                $extraido= mysqli_fetch_array($mostrarususario);
                                echo $extraido['first_name']." ".$extraido['last_name'].'<br/>';
                                ?>
                                    <ul class="container-btns-likes-dslike">
                                        <li class="list-icons-message">
                                            <div class="answer-message-cont" data-toggle="tooltip" data-placement="top" title="Comentarios"><i class="fas fa-comment-alt answer-message" id="answer-message"></i></div>
                                            <div class="btnLikeMyHeart">
                                                <ul class="contentBtnLikeMyHeart">
                                                    <li><img src="img/icons/myHeart.svg" alt="" data-toggle="tooltip" data-placement="top" title="Votos"></li>
                                                    <li></li>
                                                </ul>
                                                <ul class="votos">
                                                    <li class=" up_button" data-voto="votos" data-id="<?php echo $filas["id_user"]; ?>" >
                                                        <img src="img/icons/hapy.svg" data-toggle="tooltip" data-placement="top" title="Me gusta" class="voting_btn voting_like">
                                                        <span><?php echo $filas["votos"]; ?></span>
                                                    </li>
                                                    <li class=" up_button" data-voto="votos" data-id="<?php echo $filas["id_user"]; ?>">
                                                    
                                                        <img src="img/icons/sad.svg" data-toggle="tooltip" data-placement="top" title="No me gusta" class="votin_sad">
                                                        <span>0</span>
                                                    </li>
                                                    <li class=" up_button" data-voto="votos" data-id="<?php echo $filas["id_user"]; ?>">
                                                    
                                                        <img src="img/icons/mee.svg" data-toggle="tooltip" data-placement="top" title="Me da igual" class="votin_meeh">
                                                        <span>0</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </h3>
                            </div>
                                <p class="idea-message-chat-users" id="idea-message-chat-users"><?php echo utf8_encode($filas["argumento"]); ?></p>

                                <div class="container-display-reply">
                                    <h4 class="reply-title">
                                        Comentarios
                                    </h4>
                                    <ul class="element-reply">
                                        
                                    </ul>
                                </div>
                                <button class="btn btn-block btn-seemoremessage" id="btn-seemoremessage">Ver <i class="fas fa-plus iconMoreMinus"></i></button>
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
                <div class="reply-message" id="reply-message">
                    <div class="row">
                        <div class="col-12 col-sm-12 my-1">
                            <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                            <div class="input-group input-group-reply-message">
                                
                                <textarea type="text" class="form-control input-reply-idea" id=" input-reply-idea" placeholder="Responde esta idea" ></textarea>
                                <div class="input-group-prepend">
                                    <div class="input-group-text group-btn-reply-message">
                                        <button class="btn btn-reply-message" id="btn-reply-message">
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="write-message-mobil w-100 container fixed-bottom">
                    <div class="row row-write-message-mobil">
                        <div class="col-10 textarea">
                            <div class="form-group container-textarea-mobil">
                                <!-- <input class="title-idea-mobil" v-model="newTitle" type="text" name="" id="" placeholder="Titulo idea"> -->
                                <textarea class="form-control" v-model="newMessage" rows="5" id="comment" placeholder="Cual es tud idaea?"></textarea>
                            </div>
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
                            <div class="col-10 ">
                                <div class="container-write-idea">
                                    <div class="container-idea-general row">
                                        <div class="col-auto container-write-idea-board">
                                            <label class="sr-only" for="inlineFormInputGroup">Cual es tu idea?</label>
                                            <div class="input-group group-message-send mb-2">
                                                <form action="procesar_mensaje.php" method="POST" class="form-New-Message">
                                                    <textarea  cols="30" rows="10" class="space-whrite-idea" v-model="newMessage" class="form-control" id="inlineFormInputGroup" placeholder="Cual es tu idea?" name="argumento" require></textarea>
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
                            <div class="col-1  column-logout">
                                <div class="container-btn-logout">
                                    <i class="fas fa-power-off logout-icon btnLogout" id="btn-logout"></i>
                                </div>
                                <div class="btn btn-logout" id="btn-logout-off">
                                    <button class="btn-i-logout"><a href="index.php">Salir</a></button>
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
                                        $posts=$db->query("SELECT * FROM ideas WHERE estado = 'propuesta' order by votos desc limit 8");
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
                                                <p class="idea-message-chat-users idea-aprovada" id="idea-message-chat-users " data-toggle="modal" data-target="#exampleModalScrollable"><?php echo utf8_encode($filas["argumento"]); ?></p>
                                                <button class="btn-item-card btn btn-block voting_btn up_button" data-voto="votos" data-id="<?php echo $filas["id_Idea"]; ?>">Votar</button>
                                                
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
                                                $posts=$db->query("SELECT * FROM ideas WHERE estado = 'comite' order by f_creacion desc");
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
                                                            <!-- <i class="material-icons liston">turned_in_not</i>
                                                            <span><?php echo $filas["votos"]; ?></span> -->
                                                            <!-- <ul class="votos">
                                                                <li class="voting_btn up_button" data-voto="votos" data-id="<?php echo $filas["id_Idea"]; ?>">
                                                                    <i class="fas fa-thumbs-up like"></i>
                                                                    <span><?php echo $filas["votos"]; ?></span>
                                                                </li>
                                                            </ul> -->
                                                        </div>
                                                        <p class="idea-message-chat-users idea-aprovada" id="idea-message-chat-users " data-toggle="modal" data-target="#exampleModalScrollable"><?php echo utf8_encode($filas["argumento"]); ?></p>
                                                        <button class="btn-item-card btn btn-block voting_btn up_button">Ver mas</button>
                                                        
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
                                    <div class="owl-carousel owl-cards owl-theme ">
                                            <?php
                                                require_once("config.php");
                                                $posts=$db->query("SELECT * FROM ideas WHERE estado = 'aprobada' order by f_creacion ");
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
                                                            <!-- <i class="material-icons liston">turned_in_not</i>
                                                            <span><?php echo $filas["votos"]; ?></span> -->
                                                            <!-- <ul class="votos">
                                                                <li class="voting_btn up_button" data-voto="votos" data-id="<?php echo $filas["id_Idea"]; ?>">
                                                                    <i class="fas fa-thumbs-up like"></i>
                                                                    <span><?php echo $filas["votos"]; ?></span>
                                                                </li>
                                                            </ul> -->
                                                        </div>
                                                        <p class="idea-message-chat-users idea-message-chat-users-aproved idea-aprovada" id="idea-message-chat-users"><?php echo utf8_encode($filas["argumento"]); ?></p>
                                                        <button class="btn-item-card btn btn-block voting_btn up_button">Ver mas</button>
                                                        
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
                            <div class="col-1"> </div>
                        </div>
                    </div>
                </section>
                <section class='section-modal' id="section-modal">
                    <!-- Modal -->
                    <div class="aprobadas" id="aprobadas" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close btn-close" id="btn-close">
                                    <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <div class="modal-body" id="modal-body">

                                </div>
                                <div class="modal-footer"> 
                                    <img src="img/perfil/userPerfil.png" alt="" class="rounded-circle">
                                    <span class="name-write-idea">
                                        <?php
                                            $usuario = $_SESSION["id_user"];
                                            $mostrarususario = mysqli_query($conexion, "SELECT first_name, last_name FROM users WHERE id_user=$id_creador");
                                            mysqli_data_seek ($mostrarususario, 0);
                                
                                            $extraido= mysqli_fetch_array($mostrarususario);
                                            echo $extraido['first_name']." ".$extraido['last_name'].'<br/>' ;
                                        ?>
                                    </span> 
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ********** Botones ideas finalizadas y muertas ********** -->

                <section class="section-ideas-df">
                    <div class="container container-i-df">
                        <div class="row">

                            <div class="link-i-finish box-links-i col-6 ">
                                <div class="i-finish i-id-board">
                                    <a href="" class="ideas-finish" id="ideas-finish">Ideas finalizadas</a>
                                </div>
                            </div>
                            <div class="link-i-dead box-links-i col-6 ">
                                <div class="i-dead i-id-board">
                                    <a href="" class="ideas-dead" id="ideas-dead">Ideas muertas</a>
                                </div>
                            </div>
                        </div>
                        
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
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/home.js"></script>
    <script src="js/main.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/all.js"></script>                                        
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">

        $(document).ready(function() 
        {   
            //Popovers
            $('[data-toggle="popover"]').popover({ 
                html : true,
                container : ".container-g-home"
            })
            
            $('.voting_like').on({
                'click' : function(){
                    alert('Hola mundo')
                }
            })
            //Tooltips
            $('[data-toggle="tooltip"]').tooltip()
            
            
            
            
            $(" .voting_btn").click(function (e) 
            {
                e.preventDefault();
                var voto_hecho = $(this).data('voto');
                var id = $(this).data("id"); 
                var li = $(this);
                
                if(voto_hecho && id)
                {
                    $.post('ajax_voto.php', {'id_user':id, 'votos':voto_hecho}, function(data) 
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

        const home = document.getElementById('container-board-home')
        const allIdeas = document.getElementById('link-see-all-Ideas') //Todas las ideas
        const btnIdDead = document.getElementById('ideas-dead') //Ideas muertas
        const btnIdFinish = document.getElementById('ideas-finish') //Ideas finalizadas

        let statusItem = false

        // Funcion que muertra la informacion completa de todos los mensajes
        let itemCollapse = function(elem1, elem2,icons){
                    for(let i = 0; i < elem1.length; i++){
                        elem1[i].addEventListener('click', () => {
                            if(statusItem == false){
                                elem2[i].style.whiteSpace = 'normal'
                                icons[i].classList.remove('fa-plus')
                                icons[i].classList.add('fa-minus')
                                statusItem = true
                                console.log(statusItem)   
                            }
                            else{
                                elem2[i].style.whiteSpace = 'nowrap'
                                icons[i].classList.remove('fa-minus')
                                icons[i].classList.add('fa-plus')
                                statusItem = false
                                console.log(statusItem)
                            }        
                        })
                    
                    }
                }

       
        // *************  TEMPLATES ****************

        
        
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

                const btnShowAllIdea = document.getElementsByClassName('btn-seemoremessage-template-all')//Mensajes
                const textAllIdeas = document.getElementsByClassName('all-message-all-users')// Texto
                const iconAllIdeas = document.getElementsByClassName('iconMoreMinus-all')//icono
                const inputFilter = document.querySelector('#inputFilterSearch')// filtro de busqueda;
                const btnSearch = document.getElementById('btnFilterSearch') // Boton filtro de busqueda
                const nameUsers = document.querySelectorAll('div .name-user-all-idea') // Array de usuarios
                const result = document.getElementById('container-result-filter')
                
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
                filterUserIdea()
                btnSearch.addEventListener('click', filterUserIdea)
                inputFilter.addEventListener('keyup', filterUserIdea)
                

                //Llamada a la funcion mostrar todos los mensajes
                for(let i = 0; i < btnShowAllIdea.length; i++){
                    btnShowAllIdea[i].addEventListener('click', () => {
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
        
        //Template Ideas muertas
        btnIdDead.addEventListener('click', function(e){
            e.preventDefault()
            let content = //html
            `
                <div id="app3">
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
                                                <input type="search" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                                                </div>
                                            </div>
                                            <!-- </form> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                    <section class="ideas-muertas-paragraph container">
                        <h3>Ideas muertas</h3>
                        <p class="paragraph-id-dead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel totam ratione ut, quas eveniet repudiandae laboriosam ipsum officiis iure id, magnam aspernatur dicta repellendus tempora a similique ad veritatis placeat.
                        </p>
                    </section>
                    <section class="section-all-users-all-ideas container">
                            <div class="row">
                                <div class="col-12">
                                    <div class=" contenedor-all-ideas ">
                                        <div class="card-columns">
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
                                                <img src="img/perfil/userPerfil.png" alt="">
                                            </div>
                                            <div class="container-name-votes">
                                                <h3 class="name-user-idea"><!--<?php echo ($filas["id_user"]);
                                                $id_creador=$filas["id_user"];
                                        
                                                ?>-->
                                                <?php
                                                $usuario = $_SESSION["id_user"];
                                                $mostrarususario = mysqli_query($conexion, "SELECT first_name, last_name FROM users WHERE id_user=$id_creador");
                                                mysqli_data_seek ($mostrarususario, 0);

                                                $extraido= mysqli_fetch_array($mostrarususario);
                                                echo $extraido['first_name']." ".$extraido['last_name'].'<br/>';
                                                ?>
                                                <!--<span><ul class="votos">
                                                    <li class="voting_btn up_button" data-voto="votos" data-id="<?php echo $filas["id_user"]; ?>">
                                                    <i class="fas fa-thumbs-up like"></i>
                                                    <?php echo $filas["votos"]; ?></span>
                                                    </li>
                                                </ul>-->
                                            </div>
                                                <p class="idea-message-dead idea-message-chat-users" id="idea-message-chat-users"><?php echo utf8_encode($filas["argumento"]); ?></p>
                                                <button class="btn btn-block btn-seemoremessage-template-dead" id="btn-seemoremessage">Ver <i class="fas fa-plus semoreDead"></i></button>
                                        
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
            home.innerHTML = content
            console.log('Ideas muertas')
            
            const btnShowAllIdeaDead = document.getElementsByClassName('btn-seemoremessage-template-dead')
            const textAllIdeasDead = document.querySelectorAll('.idea-message-dead')
            const seMoreDead = document.getElementsByClassName('semoreDead')
            
            //showMessageDead(btnShowAllIdea, textAllIdeas)
            for(let i = 0; i < btnShowAllIdeaDead.length; i++){
                btnShowAllIdeaDead[i].addEventListener('click', itemCollapse(btnShowAllIdeaDead, textAllIdeasDead, seMoreDead))
            }
        })
        

        //Template ideas finalizadas 

        btnIdFinish.addEventListener('click', function(e){
            e.preventDefault()
            let content = //html
            `
                <div class="app4" id="app4">
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
                                                <input type="search" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                                                </div>
                                            </div>
                                            <!-- </form> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                    <section class="ideas-muertas-paragraph container">
                        <h3>Ideas finalizadas</h3>
                        <p class="paragraph-id-dead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel totam ratione ut, quas eveniet repudiandae laboriosam ipsum officiis iure id, magnam aspernatur dicta repellendus tempora a similique ad veritatis placeat.
                        </p>
                    </section>
                    <section class="section-all-users-all-ideas container">
                        <div class="row">
                            <div class="col-12">
                                <div class="contenedor-all-ideas ">
                                    <div class="grid">

                                        <?php
                                            require_once("config.php");
                                            $posts=$db->query("SELECT * FROM ideas order by f_creacion desc");
                                            if ($filas=$posts->fetch_array())
                                            {
                                            do
                                            {
                                        ?>
                                        <div class="grid-item">
                                            <div class="card card-finish" style="width: 18rem;">
                                                <img src="img/ideas/idea_f.jpg" alt="" class="card-img-top">
                                                <div class="container-name-votes card-body">
                                                    <!--<h3 class="name-user-idea"><?php echo ($filas["id_user"]);
                                                    $id_creador=$filas["id_user"];
                                                
                                                    ?>-->
                                            
                                                    <p class="idea-message-chat-users card-text" id="idea-message-chat-users"><?php echo utf8_encode($filas["argumento"]); ?></p>
                                                        <!--<ul class="votos ">
                                                            <li class="voting_btn up_button" data-voto="votos" data-id="<?php echo $filas["id_user"]; ?>">
                                                            <i class="fas fa-thumbs-up like"></i>
                                                            <span><?php echo $filas["votos"]; ?></span>
                                                            </li>
                                                        </ul> -->
                                                       
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <div class="container-date">
                                                            <span>Fecha: </span>
                                                            <span><?php echo utf8_encode($filas["f_creacion"]); ?></span> 
                                                        </div>
                                                        <div class="container-dates-user-write-idea">
                                                            <img src="img/perfil/userPerfil.png" alt="" class="rounded-circle">
                                                            <span class="name-write-idea">
                                                                <?php
                                                                    $usuario = $_SESSION["id_user"];
                                                                    $mostrarususario = mysqli_query($conexion, "SELECT first_name, last_name FROM users WHERE id_user=$id_creador");
                                                                    mysqli_data_seek ($mostrarususario, 0);
                            
                                                                    $extraido= mysqli_fetch_array($mostrarususario);
                                                                    echo $extraido['first_name']." ".$extraido['last_name'].'<br/>' ;
                                                                ?>
                                                            </span>       
                                                        </div>
                                                    </li>
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
            home.innerHTML = content
            console.log('Ideas finalizadas')

            let elem = document.querySelector('.grid');
            let msnry = new Masonry( elem, {
            // options
                itemSelector: '.grid-item'
                //columnWidth: 0
            })


        })

    </script>
    
  </body>
</html>