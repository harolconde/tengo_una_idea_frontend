<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header('Location: index.php');
    }
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

    require_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home user</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
    <div class="container-g-user">
        <div class="container-user1">
            <div class="container-imagen">imagen</div>
            <div class="container-datos">
                <div class="container-name-user">
                    <span class="userdate"><?php echo $_SESSION["username"];?></span>
                    <span class="userdate"><?php echo $_SESSION["username"].'@'.'novatec.com.co';?></span>
                </div>
            </div>
            
            <div class="container-btn-edicion">
                    <button class="btn-edition-toogle" id="btn-edit-user"> <i class="fas fa-cog icon-edit"></i> Editar<i class="fas fa-plus icon-seemore-user"></i></button>
                    <div class="container-edit-datos collapsible" id="container-edit-datos">
                        <div class=" box-datose">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
                            </div>
                        </div>
                        <div class=" box-datose">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo Electronico">
                            </div>
                        </div>
                        <div class=" box-datose">
                        <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contraseña">
                            </div>
                        </div>
                        <div class="container-btn-acept-datos">
                        <button type="submit" class="btn btn-lg btn-submit-duser">Aceptar</button>
                        </div>
                    </div>
                   
                </div>
                    
                <div class="container-volveri">
                    <a href="home.php"><i class="fas fa-arrow-left"></i> volver al <span class="return-index">inicio</span></a> 
                </div>
           
        </div>
        <div class="container-user2">
            <div class="titulo-ideas-user"><b>Mis Ideas</b></div>
            <div class="list-ideas-user">
                <div class="caja1-list caja-list">
                    <div class="container-all-idea-user postuladas btn-collapsible">
                        <span>Ideas Postuladas</span>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="list-allideas collapsible id-1">
                        <ul class="list-group list-group-flush">
                        <?php
                            
                            $usuario = $_SESSION["user_id"];
                            $posts=$db->query("SELECT * FROM ideas where id_user = $usuario  and estado = 'propuesta' order by f_creacion desc");
                            if ($filas=$posts->fetch_array())
                            {
                                do
                                {
                                ?>
                                <li class="list-group-item">
                                <div class="contatiner-idea-credentials">
                                    <div class="img-user-in-chat">
                                        <img v-bind:src="image" alt="">
                                    </div>
                                    <div class="container-name-votes">
                                        <h3 class="name-user-idea"><?php echo ($filas["id_user"]); 
                                             $id_creador=$filas["id_user"];
                                                                           
                                        ?>
                                        <?php    
                                                $usuario = $_SESSION["id_user"];
                                                $mostrarususario = mysqli_query($conexion, "SELECT first_name, last_name FROM users WHERE id_user=$id_creador");
                                                 mysqli_data_seek ($mostrarususario, 0);

                                                $extraido= mysqli_fetch_array($mostrarususario);
                                                echo $extraido['first_name']." ".$extraido['last_name'].'<br/>';
                                        ?>
                                        
                                        </h3>
                                        
                                    </div>
                                    <p class="idea-message-chat-users" id="idea-message-chat-users"><?php echo utf8_encode($filas["argumento"]); ?></p>
                                         
                                </div>
                               
                                <i class="far fa-eye"></i>
                                <i class="far fa-trash-alt"></i>
                                <?php
                                    }
                                    while($filas=$posts->fetch_array());
                                }
                                ?>

                            </li> 
                           
                        </ul>
                    </div>
                </div>
                <div class="caja2-list caja-list">
                    <div class="container-all-idea-user postuladas  btn-collapsible">
                        <span>Ideas Aprobadas</span>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="list-allideas collapsible id-2">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Primera Idea
                                <i class="far fa-eye eye-ideas"></i>
                            </li>
                            <li class="list-group-item">Segunda Idea
                                <i class="far fa-eye eye-ideas"></i>
                            </li>
                            <li class="list-group-item">Tercera Idea
                                <i class="far fa-eye eye-ideas"></i>
                            </li>
                           
                        </ul>
                    </div>
                </div>
                <div class="caja3-list caja-list">
                <div class="container-all-idea-user postuladas  btn-collapsible">
                        <span>Ideas Rechazadas</span>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="list-allideas collapsible">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Primera Idea
                                <i class="far fa-eye eye-ideas"></i>
                            </li>
                            <li class="list-group-item">Segunda Idea
                                <i class="far fa-eye eye-ideas"></i>
                            </li>
                            <li class="list-group-item">Tercera Idea
                                <i class="far fa-eye eye-ideas"></i>
                            </li>
                           
                        </ul>
                    </div>
                </div>
                <div class="caja4-list caja-list">
                <div class="container-all-idea-user postuladas  btn-collapsible">
                        <span>Ideas en Debate</span>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="list-allideas collapsible">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Primera Idea
                                <i class="far fa-eye eye-ideas"></i>
                            </li>
                            <li class="list-group-item">Segunda Idea
                                <i class="far fa-eye eye-ideas"></i>
                            </li>
                            <li class="list-group-item">Tercera Idea
                                <i class="far fa-eye eye-ideas"></i>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>