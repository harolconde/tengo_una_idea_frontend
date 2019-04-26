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

//Template ideas finalizadas 
        'use strict'

        const btnIdFinish = document.getElementById('ideas-finish') //Ideas finalizadas
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
                                            require_once("../config.php");
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