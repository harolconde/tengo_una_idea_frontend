<?php
    require("ldapconfig.php");
    header("Content-type : text/html; target= utf-8");
    $usr = $_POST["user"];
    $usuario = mailboxpowerloginrd($usr,$_POST["password"]);
    if($usuario == "0" || $usuario == ' ')
    {
        $_SERVER = array();
        $_SESSION = array();
        echo "<script>alert('Usuario o contraseña incorrecta. Vuelve a ingresar las credenciales'); </script>";
    }
    else{
        session_start();
        $_SESSION["user"] = $usuario;
        $_SESSION["autentica"] = "SIP";
        echo "<script>window.location.href='app.php'; </script>";
    }
?>