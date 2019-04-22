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
                                    <div class="">
                                        <ul class="container-result-filter" id="container-result-filter">
                                        </ul>
                                    </div>
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
                                                        <button class="btn btn-block btn-seemoremessage  btn-seemoremessage-template" id="btn-seemoremessage-template">Ver <i class="fas fa-plus iconMoreMinus"></i></button>
                                                        
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
                