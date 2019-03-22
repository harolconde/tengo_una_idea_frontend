<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$db_username = 'root';
$db_password = '';
$db_name = 'db_novatecideas';
$db_host = 'localhost';

$db = new mysqli($db_host, $db_username, $db_password,$db_name) or die('could not connect to database');
?>