<?php @session_start(); ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Acceso con LDAP</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container p-2">
            <div class="row">
                <div class="col-6 p-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti nobis dicta asperiores explicabo. Voluptate nisi quo, aut dolore odit nesciunt.</div>
                <div class="col-6 p-2">
                    <form method="post" action="php/autenticacion.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre de usuario</label>
                            <input type="text" class="form-control" id="user" name="user" aria-describedby="emailHelp" placeholder="Ingrese su usuario Novatec" req>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" req>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
    </html>
<?php exit(); ?>