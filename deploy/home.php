<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
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
        <style type="text/css">


</style>
    </head>
	<body>
        <div id="app" class="container-g-home">
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
            <div class="container-chat">
                <div class="container-g-chat">
                    <div class="wel row">
                        <div class="container-img-user col-4">
                            <img src="img/perfil/userAdmon.png" alt="" width>
                        </div>
                        <div id="login" align="left" class="container-dates-user-active col-8">
                            <!-- <p>ID de Cuenta: 
                                <b><?php 
                                    echo $_SESSION["user_id"];
                                ?></b>
                            .</p>  -->
                            <span>Nombre de usuario</span>
                            <span>Correo de Usuario</span>
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
                                    <div class="container-name-votes">
                                        <h3 class="name-user-idea"><?php echo utf8_encode($filas["id_user"]); ?> {{newName}}</h3>
                                    </div>
                                    
                                    
                                    <p><?php echo utf8_encode($filas["argumento"]); ?></p>
                                    <ul class="votos bg-primary">
                                        <li class="voting_btn up_button" data-voto="votos" data-id="<?php echo $filas["id_Idea"]; ?>">
                                            <span><?php echo $filas["votos"]; ?></span>
                                        </li>
                                    </ul>
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
                        <a href="">Ver todas</a>
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
                                                <textarea name="" id="" cols="30" rows="10" class="space-whrite-idea" v-model="newMessage" class="form-control" id="inlineFormInputGroup" placeholder="Cual es tu idea?"></textarea>
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <button class="btn btn-plus-idea" @click="addComments">
                                                        <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="container-title-idea col-10">
                                            <input type="text" name="" id="" placeholder="Titulo Idea" class="title-idea" v-model="newTitle"> 
                                            <textarea name="" id="" cols="30" rows="10" class="space-whrite-idea" v-model="newMessage"></textarea>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-plus-idea" @click="addComments">
                                                <i class="fas fa-plus-square plus-add-idea"></i>
                                            </button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 column-logout">
                                <i class="fas fa-power-off logout-icon" id="btnLogout"></i>
                                <div class="btn-logout" id="btn-logout-off">
                                    <button class="btn-i-logout"><a href="./php/logout.php">Salir</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section-post">
                    <div class="container-post-it">
                        <div class="row row-post">
                            <div class="col-1"></div>
                            <div class="col-10 container-box-post">
                                <div class="box-cards">
                                    <div class="owl-carousel owl-cards owl-theme">
                                        <div class="item item-cards card-postuled"><h4>1</h4>
                                            <div class="item-card-idea">
                                                <i class="material-icons liston">turned_in_not</i>
                                            </div>
                                            <button class="btn-item-card btn btn-block">Votar</button>
                                        </div>
                                        <div class="item item-cards card-postuled"><h4>2</h4>
                                            <div class="item-card-idea">
                                                <i class="material-icons liston">turned_in_not</i>
                                            </div>
                                            <button class="btn-item-card btn btn-block">Votar</button>
                                        </div>
                                        <div class="item item-cards card-postuled"><h4>3</h4>
                                            <div class="item-card-idea">
                                                <i class="material-icons liston">turned_in_not</i>
                                            </div>
                                            <button class="btn-item-card btn btn-block">Votar</button>
                                        </div>
                                        <div class="item item-cards card-postuled"><h4>4</h4>
                                            <div class="item-card-idea">
                                                <i class="material-icons liston">turned_in_not</i>
                                            </div>
                                            <button class="btn-item-card btn btn-block">Votar</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-cards">
                                    <div class="owl-carousel owl-cards owl-theme ">
                                        <div class="item item-cards card-pas-umbral"><h4>1</h4></div>
                                        <div class="item item-cards card-pas-umbral"><h4>2</h4></div>
                                        <div class="item item-cards card-pas-umbral"><h4>3</h4></div>
                                        <div class="item item-cards card-pas-umbral"><h4>4</h4></div>
                                    </div>
                                </div>
                                <div class="box-cards">
                                    <div class="owl-carousel owl-cards owl-theme">
                                        <div class="item item-cards card-aproved"><h4>1</h4></div>
                                        <div class="item item-cards card-aproved"><h4>2</h4></div>
                                        <div class="item item-cards card-aproved"><h4>3</h4></div>
                                        <div class="item item-cards card-aproved"><h4>4</h4></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                </section>
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
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
    const home = document.getElementById('container-board-home')
    const btnOff = document.getElementById('btnLogout')

    btnOff.addEventListener('click', function(){
    let content = 
        `
            <div>
                <span>
                    <?php  

                        echo $_SESSION["user_id"];
                    ?>
                </span>
            </div>
        `
        
        home.innerHTML = content;
        }
    )
    </script>




<!-- <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> -->
<script type="text/javascript">
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
</script>
    
  </body>
</html>