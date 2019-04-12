<?php @session_start(); ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario de Registro</title>
        <link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">

		<!-- <link rel="stylesheet" href="css/login.css"> -->
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<div class="container-general container-general-login">
			<div class="container">
				<div class="row row-login">
					<div class="col-6 container-description-login">
						<div class="container-title">
							<div class="title-page">
								<h3 class="title-page-idea">Tengo una <span class="title-idea-block milky">IDEA<span></h3>
							</div>
							<div class="container-description">
								Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima atque, distinctio sequi enim odio tempora perferendis suscipit illo vitae exercitationem.
							</div>
						</div>
					</div>
					<div class="col-6 container-card-login">
						<span class="h4 title-page-mobile">Tengo una IDEA</span>
						<div class="lyr card-login">
							<div class="car-title">
								<picture class="container-img-login">
									<!-- <source srcset="img/alita.jpg" media="(max-width: 768px)"> -->
									<img class="img-login" srcset="img/login/login.png" width="100%" height="auto">
								</picture>
							</div>
							<div class="card-content">
								<form role="form" name="login" action="php/autenticacion.php" method="post">
									<div class="form-group card-content-input">
										<!-- <label for="username">Nombre de usuario</label> -->
										<input type="text" class="form-control input-card-login" id="username" name="username" placeholder="Nombre de usuario">
									</div>
									<div class="form-group card-content-input">
										<!-- <label for="password">Contrase&ntilde;a</label> -->
										<input type="password" class="form-control input-card-login" id="password" name="password" placeholder="Contrase&ntilde;a">
									</div>
									<br>
									<div class="card-action">
										<button type="submit" class="btn btn-default btn-submit-login">Iniciar sesion</button>
										<!-- <button><a href="index.php">Volver</a></button> -->
									</div>
								</form>
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
			

			
		<script src="js/valida_login.js"></script>
	</body>
</html>