<?php

require 'config.php';

// Insertion avec requête préparée
//$stmt =$pdo->prepare('INSERT INTO truc (machin) VALUES (?)');
//$stmt ->execute([$bidule]);

// Préparation de la requête
$query = "SELECT * FROM produits";

// Éxecution de la requête
$stmt = $pdo->query($query);

// Récupération des données (tableau associatif)
$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);

//print_r($auteur)
?>

<!--Édition et suppression-->
<!--edit.php et delete.php-->
<!--<a ref="edit.php?id="<?php /*= $produits['id']; */?>>Modifier</a>-->
<!--$id = $_GET['id'];-->

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des produits</title>
    <link href="style.css" rel="stylesheet" />
</head>
<body>
<?php if (!empty($produits)): ?>

    <h1> Liste des produits</h1>
    <table>
        <thead>
        <tr>

            <th>ID</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($produits as $p): ?> <!--// : remplace les accolade du foreach-->
            <tr>
                <td><?= htmlspecialchars($p['id']) ?></td>
                <td><?= htmlspecialchars($p['nom']) ?></td>
                <td><?= htmlspecialchars($p['prix']) ?> €</td>
                <td><?= htmlspecialchars($p['stock']) ?></td>
                <td><a class="edit" href="edit.php?id=<?= $p['id']; ?>">Modifier</a></td>
                <td><a class="delete" href="delete.php?id=<?= $p['id']; ?>">Supprimer</a></td>
            </tr>
        <?php endforeach; ?> <!--// Fin du foreach -->
        </tbody>

    </table>
    <button><a class="add" href="create.php">Ajouter produit</a> </button>
<?php else: ?>
    <p>Aucun produit</p>
<?php endif; ?>

</body>
</html>
