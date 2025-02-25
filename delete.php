<?php
require 'config.php';
session_start();

$id = ($_GET['id']);

try{
    $sql="DELETE FROM produits WHERE id=?";
    $req=$pdo->prepare($sql);
    $retour=$req->execute([$id]);
    if($retour){
        echo 'Produit supprimé';
    }
}catch(PDOException $e){
    echo 'error  est survenue '.$e->getMessage();
}
header("Location: index.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supprimer un article</title>
</head>
<body>


</body>
</html>
