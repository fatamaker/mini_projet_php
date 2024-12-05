<?php
include '../includes/db.php';
include '../includes/header.php';


if (!isset($_SESSION['client_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];

    $query = "SELECT * FROM voitures WHERE disponibilite = 1 AND id NOT IN (
        SELECT voiture_id FROM reservations WHERE 
        (date_debut <= ? AND date_fin >= ?) OR 
        (date_debut <= ? AND date_fin >= ?)
    )";
    $stmt = $conn->prepare($query);
    $stmt->execute([$date_fin, $date_debut, $date_debut, $date_fin]);
    $voitures = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechercher une Voiture</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fa;
            color: #343a40;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #8b8a97;
        }

        .navbar .nav-link {
            color: white !important;
        }

        .navbar .nav-link:hover {
            text-decoration: underline;
        }

        .navbar img {
            width: 10%;
            height: auto;
            max-height: 120px;
            object-fit: contain;
        }

        /* Container for the search form */
        .container_search {
            max-width: 800px;
            margin: auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
           
           
        }

        .container_search h2 {
            color: #333;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 4px;
        }

        .btn-dark {
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
            width: 100%;
        }

        /* Styling for the search result list */
        .voiture-list {
            list-style-type: none;
            padding: 0;
        }

        .voiture-list li {
            padding: 10px;
            margin: 10px 0;
            background-color: #f8f9fa;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .voiture-list li a {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
        }

        .voiture-list li a:hover {
            background-color: #218838;
        }

        /* Responsive design adjustments */
        @media (max-width: 768px) {
            .navbar img {
                width: 15%;
            }

            .container_search {
                width: 90%;
            }
        }
    </style>
</head>
<body>

<div class="container_search mt-4">
    <h2>Rechercher une Voiture</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="date_debut" class="form-label">Date de Début</label>
            <input type="date" name="date_debut" class="form-control" id="date_debut" required>
        </div>
        <div class="mb-3">
            <label for="date_fin" class="form-label">Date de Fin</label>
            <input type="date" name="date_fin" class="form-control" id="date_fin" required>
        </div>
        <button type="submit" class="btn btn-dark">Rechercher</button>
    </form>

    <?php if (isset($voitures)): ?>
        <h3 class="mt-4">Voitures Disponibles</h3>
        <ul class="voiture-list">
            <?php foreach ($voitures as $voiture): ?>
                <li>
                    <div>
                        <?= "{$voiture['marque']} {$voiture['modele']} ({$voiture['annee']})" ?>
                    </div>
                    <div>
                        <a href="book_car.php?id=<?= $voiture['id'] ?>&date_debut=<?= $date_debut ?>&date_fin=<?= $date_fin ?>" class="btn btn-success btn-sm">Réserver</a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>

</body>
</html>
