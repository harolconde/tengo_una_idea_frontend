<?php
    //*************************************************************************************//
    //***** Conexion LDAP a servidor Active Directory para autenticaciion de usuarios *****//
    //*************************************************************************************//

    $ldaphost = '172.65.10.4'; //Servidor
    $ldapport = 389; //Puerto

    //Credenciales de usuario
    $user = "novatec\\". $_POST["user"]; //'Novatec\harol.conde'; 
    $passuser = $_POST["password"];//'Temporal123'; 

    //Conexion al server
    $ldapconn = ldap_connect($ldaphost, $ldapport)  
                or die("No hay conexion con el servidor $ldaphost");
    //Authenticación
    if($ldapconn){
        $ldapbind = ldap_bind($ldapconn, $user, $passuser);
        if($ldapbind){
            echo 'Conexion exitosa al server https:\\'. $ldaphost.":".$ldapport. '<br />';
            
            if($user== "0" || $user == " " || $passuser == "0" || $passuser ==""){
                header('Location: ../home_ldap.php');
                print "<p>Debes llenar todos los campos requeridos</p>";
            }
            else{
                session_start();
                $_SESSION['user'] = $_POST["user"];
                header('Location: ../app.php');
            }
        } 
        else{
            // echo "ldap_error: ". ldap_error($ldapconn);
            // ldap_get_option($ldapconn, LDAP_OPT_DIAGNOSTIC_MESSAGE, $err);
            // echo "ldap_get_option: $err";
            
            header('Location: ../home_ldap.php');
            echo "<p>Usuario y/o contraseña incorrecta<p>";
            
        }
    }
    ldap_unbind($ldapconn);
?>
