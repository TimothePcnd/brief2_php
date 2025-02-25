<?php

// Information de connexion à la base de données
$host = "localhost";
$dbname = "mytech";
$user = "root";
$pass = "";

try {
// Creation d'une instance PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
// Configuration de PDO en cas d'exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
// S'il y a une erreur de connexion
    die("Erreur de connexion : " . $e->getMessage());
}

?>


