<?php 
$host = "localhost";
$user = "jorge";
$pass = "P@ssw0rd";
$db = "proyecto_login";

$conn = new mysqli($host, $user,$pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: ".$conn->connect_error);
}
?>