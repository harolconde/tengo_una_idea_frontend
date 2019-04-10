<?php
    @session_start();
    if(!isset($_SESSION["user"])){
        header('Location: home_ldap.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body>
    <div class="container p-2">
        <div class="row">
            <div class="col-4">
                <span>Hola <?php echo $_SESSION["user"].'@novatec.com.co'; ?></span> <br>
                <br>
                <a href="php/salir.php">Salir</a>
            </div>
        </div>
    </div>
</body>
</html>