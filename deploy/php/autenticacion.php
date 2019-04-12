<?php
    //*************************************************************************************//
    //***** Conexion LDAP a servidor Active Directory para autenticaciion de usuarios *****//
    //*************************************************************************************//

    $ldaphost = '172.65.10.4'; //Servidor
    $ldapport = 389; //Puerto

    //Credenciales de usuario
    $user = "novatec\\". $_POST["username"]; //'Novatec\harol.conde'; 
    $passuser = $_POST["password"];//'Temporal123'; 

    //Conexion al server
    $ldapconn = ldap_connect($ldaphost, $ldapport)  
                or die("No hay conexion con el servidor $ldaphost");
    //Authenticación
    if($ldapconn){
        $ldapbind = ldap_bind($ldapconn, $user, $passuser);
        if($ldapbind){
            echo 'Conexion exitosa al server https:\\'. $ldaphost.":".$ldapport. '<br />';
            session_start();
            $_SESSION['username'] = $_POST["username"];         
            header('Location: ../home.php');
        } 
        else{
            
            header('Location: ../index.php');
            ?>
                <script language="JavaScript">
                    alert("Usuario y/o contraseña incorrecta");
                </script> 
            <?php
        }
    }
    ldap_unbind($ldapconn);
?>
