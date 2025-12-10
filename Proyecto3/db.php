<?php

$host = "localhost";
$dbname = "username";
$user = "root";
$pass = "";

try {

    $pdo = new PDO("mysql:host=$hsot;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    
    die("Error de conexión:".$e->getMessage());

}

?>