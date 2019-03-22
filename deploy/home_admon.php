<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home admon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
    <div class="container-g-user">
        <div class="container-user1 admon1">
            <div class="container-imagen">imagen</div>
            <div class="container-datos">
                <div class="container-name-user">
                    <span class="userdate">Nombre Administrador</span>
                    <span class="userdate">email.admon@email.com.co</span>
                </div>
            </div>
            <div class="container-edit">
                <div class="container-btn-edicion">
                    <button class="btn-edition-toogle"> <i class="fas fa-cog icon-edit"></i> Registrar Usuario<i class="fas fa-plus icon-seemore-user"></i></button>
                    <div class="container-edit-datos">
                        <div class=" box-datose">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de Usuario">
                            </div>
                        </div>
                        <div class=" box-datose">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo Usuario">
                            </div>
                        </div>
                        <div class=" box-datose">
                        <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contraseña Usuario">
                            </div>
                        </div>
                        <div class=" box-datose">
                        <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tipo">
                            </div>
                        </div>
                        <div class="container-btn-acept-datos">
                        <button type="submit" class="btn btn-lg btn-submit-duser btn-submit-admon">Registrar</button>
                        </div>
                    </div>
                   
                </div>
                <button class="container-admon-usuarios" id="container-admon-usuarios"> Administrar Usuarios</button>
                <button class="container-admon-ideas" id= "container-admon-ideas" >Administrar ideas</button>  
                <div class="container-volveri">
                    <a href="home.php"><i class="fas fa-arrow-left"></i> volver al <span class="return-index">inicio</span></a> 
                </div>
            </div>
           
        </div>
        <section class="section-admon-ideas">
                    <div class="container container-ideas">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10 ">
                                
                            </div>
                            <div class="col-1">
                                <i class="fas fa-power-off logout-icon"></i>
                                <div class="btn-logout">
                                    <button class="btn-i-logout"><a href="./php/logout.php">Salir</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        <section class="section-admon-datos"  id="section-admon-datos">
            <div class="col12"></div>
                <div class="row">
                        <div class="col-1"></div>
                        <div class="col-10 ">
                            <div class="row">
                                <div class="col-12 p-2">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Cantidad de Usuarios Registrados
                                            <span class="badge badge-primary badge-pill">80</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Cantidad de ideas
                                            <span class="badge badge-primary badge-pill">50</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Ideas Aprobadas
                                            <span class="badge badge-primary badge-pill">10</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Ideas Muertas
                                            <span class="badge badge-primary badge-pill">60</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Ideas en Debate
                                            <span class="badge badge-primary badge-pill">2</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Ideas en proceso
                                            <span class="badge badge-primary badge-pill">5</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Cantidad de Usuarios Registrados
                                            <span class="badge badge-primary badge-pill">4</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-1">
                        </div>
                    </div>
            </section>
    </div>

<script>
    // Eventos templates pagina administrador
    const perfilAdmon = document.getElementById('section-admon-datos')
    const btnAllUser = document.getElementById('container-admon-usuarios')
    const btnAllIdeas = document.getElementById('container-admon-ideas')

    btnAllUser.addEventListener('click', ()=>{
        let contentAllUser = 
        `
            <div class="container">
                 <section class="section-perfil-admon">
                    <div class="admon-volver-perfil volver-p">
                        <a href="home.php"><i class="fas fa-arrow-left"></i> volver al <span class="return-index">Perfil</span></a>
                    </div>
                    <div class="admon-titulo-usuarios">
                        <h1>Todos los usuarios</h1>
                    </div>
                
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card imagen</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Nombre del Usuario</li>
                                <li class="list-group-item">Correo</li>
                                <li class="list-group-item">Ideas Postuladas <span class="badge badge-primary badge-pill span-admon-postuladas">5</span></li>
                                <li class="list-group-item">Ideas Aprobadas <span class="badge badge-primary badge-pill span-admon-aprobadas">2</span></li>
                            </ul>
                        </div>
                        <div class="card-body card-body-card">
                        <button class="btn-card-edit btn-card-i "><i class="fas fa-pencil-alt"></i></button>
                        <button class="btn-card-remove btn-card-i"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </div>    
                </section>   
            </div>
            
        `
        perfilAdmon.innerHTML = contentAllUser
    })


</script>
</body>
</html>