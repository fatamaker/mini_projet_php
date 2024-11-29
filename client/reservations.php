<?php
include '../includes/db.php';
include '../includes/header.php';
session_start();

if (!isset($_SESSION['client_id'])) {
    header("Location: login.php");
    exit();
}

$query = "SELECT r.*, v.marque, v.modele, v.annee FROM reservations r 
          JOIN voitures v ON r.voiture_id = v.id 
          WHERE r.client_id = ?";
$stmt = $conn->prepare($query);
$stmt->execute([$_SESSION['client_id']]);
$reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container mt-4">
    <h2>Mes Réservations</h2>
    
    <?php if (empty($reservations)): ?>
        <p>Aucune réservation trouvée.</p>
    <?php else: ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Voiture</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reservations as $reservation): ?>
                    <tr>
                        <td><?= "{$reservation['marque']} {$reservation['modele']} ({$reservation['annee']})" ?></td>
                        <td><?= $reservation['date_debut'] ?></td>
                        <td><?= $reservation['date_fin'] ?></td>
                        <td>
                            <!-- Ici vous pouvez ajouter des actions, par exemple, un bouton de modification ou annulation -->
                            <a href="cancel_reservation.php?id=<?= $reservation['id'] ?>" class="btn btn-danger btn-sm">Annuler</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
