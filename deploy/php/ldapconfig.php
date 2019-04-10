<?php
    //$userGet = $_GET["username"];
    $ldaphost = '172.65.10.4'; //Servidor
    $ldapport = 389; //Puerto

    //Credenciales de usuario
    $user = 'novatec\harol.conde';
    $passuser = 'Temporal123';

   

    //Conexion al server
    $ldapconn = ldap_connect($ldaphost, $ldapport)  
                or die("No hay conexion con el servidor $ldaphost");
    if($ldapconn){
        $ldapbind = ldap_bind($ldapconn, $user, $passuser);
        if($ldapbind){
            echo 'Conexion exitosa al server https:\\'. $ldaphost.":".$ldapport. '<br />';
            echo '<span>'. $user .'<span>';
        }
        else{
            echo 'Conexion fallida al server';
        }
    }
?>
