<?php

// Information de connexion à la base de données
$host = "localhost";
$dbname = "mytech";
$user = "root";
$pass = "";

/*try {
    // Creation d'une instance PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    // Configuration de PDO en cas d'exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // S'il y a une erreur de connexion
    die("Erreur de connexion : " . $e->getMessage());
}*/

// Préparation de la requête
$query = "SELECT * FROM auteur";

// Éxecution de la requête
$stmt = $pdo->query($query);

// Récupération des données (tableau associatif)
$auteur = $stmt->fetchAll(PDO::FETCH_ASSOC);

//print_r($auteur)


?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des auteurs</title>
</head>
<body>
<?php if (!empty($auteur)): ?>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Date de naissance</th>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($auteur as $a): ?> <!--// : remplace les accolade du foreach-->
    <tr>
        <td><?= htmlspecialchars($a['id']) ?></td>
        <td><?= htmlspecialchars($a['nom']) ?></td>
        <td><?= htmlspecialchars($a['prenom']) ?></td>
        <td><?= htmlspecialchars($a['date_naissance']) ?></td>
    </tr>
    <?php endforeach; ?> <!--// Fin du foreach -->
    </tbody>
</table>
<?php else: ?>
<p>Aucun auteur</p>
<?php endif; ?>

</body>
</html>