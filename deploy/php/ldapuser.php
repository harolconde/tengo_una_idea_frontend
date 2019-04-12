<?php
    session_start();
    // if(!isset($_SESSION["username"])){
    //     header('Location: index.php');
    // }
    include 'autenticacion.php';
     echo $_SESSION["username"];
?>