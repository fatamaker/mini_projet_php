<?php
include '../includes/db.php';
include '../includes/header.php';


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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Réservations</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .btn-danger {
            background-color: #ff4d4d;
            border: none;
        }

        .btn-danger:hover {
            background-color: #e63939;
        }

        .alert-warning {
            font-size: 1.1rem;
            font-weight: bold;
        }

        .card-header {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="card shadow">
            <div class="card-header bg-dark text-white">
                <h2 class="mb-0">Mes Réservations</h2>
            </div>
            <div class="card-body">
                <?php if (empty($reservations)): ?>
                    <div class="alert alert-warning text-center">
                        <p>Aucune réservation trouvée.</p>
                    </div>
                <?php else: ?>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                        <thead class="table-light">
                                <tr>
                                    <th>Voiture</th>
                                    <th>Date de début</th>
                                    <th>Date de fin</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($reservations as $reservation): ?>
                                    <tr>
                                        <td><?= "{$reservation['marque']} {$reservation['modele']} ({$reservation['annee']})" ?></td>
                                        <td><?= $reservation['date_debut'] ?></td>
                                        <td><?= $reservation['date_fin'] ?></td>
                                      
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
