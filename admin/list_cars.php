<?php
include '../includes/db.php';
include '../includes/header.php';
$query = "SELECT * FROM voitures";
$stmt = $conn->query($query);
$voitures = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container mt-4">
    <h2>Liste des Voitures</h2>
    <a href="add_car.php" class="btn btn-outline-dark mb-3">Ajouter une Voiture</a>
    <table class="table ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Année</th>
                <th>Immatriculation</th>
                <th>Disponibilité</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($voitures as $voiture): ?>
                <tr>
                    <td><?= $voiture['id'] ?></td>
                    <td><?= $voiture['marque'] ?></td>
                    <td><?= $voiture['modele'] ?></td>
                    <td><?= $voiture['annee'] ?></td>
                    <td><?= $voiture['immatriculation'] ?></td>
                    <td><?= $voiture['disponibilite'] ? 'Oui' : 'Non' ?></td>
                    <td>
                        <a href="edit_car.php?id=<?= $voiture['id'] ?>" class="btn btn-secondary btn-sm">Modifier</a>
                        <a href="delete_car.php?id=<?= $voiture['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette voiture ?');">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

