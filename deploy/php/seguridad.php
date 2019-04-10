<?php
@session_start();
if($_SESSION["autentica"] != "SIP"){
    header("Location: ../home_ldap.php");
    exit();
}
?>