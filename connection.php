<?php
$host = "localhost";
$username = "root";  
$password = "rodme09*"; 
$dbname = "edoc"; 

$database = new mysqli($host, $username, $password, $dbname);

if ($database->connect_error) {
    die("Échec de la connexion : " . $database->connect_error);
}
?>

