<?php
session_start(); // Démarrer la session en haut du fichier
define('BASE_URL', '/location_voiture');
define('img_URL', '/location_voiture/assets/images');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Location de Voitures</title>
    <style>
         body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fa;
            color: #343a40;
            margin: 0;
            padding: 0;
        }

    .carousel-item img {
    height: 500px;
    object-fit: cover;}
.uniform-img {
width: 100%; /* S'adapte à la largeur du conteneur */
height: 200px; /* Hauteur fixe */
object-fit: cover; /* Garde le ratio et remplit l'espace */
border-radius: 8px; /* Optionnel : coins arrondis pour un meilleur design */}
</style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #8b8a97;">
    <div class="container-fluid">
        <img src="<?= img_URL ?>/logo.png" class="d-block" alt="Logo Location Voitures">
        <a class="navbar-brand" href="<?= BASE_URL ?>/index.php">Location Voitures</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <?php if (isset($_SESSION['admin_id'])): ?>
                    <!-- Menu pour l'admin -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>/admin/list_cars.php">Gestion des Voitures</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>/admin/logout.php">Se Déconnecter</a>
                    </li>
                <?php elseif (isset($_SESSION['client_id'])): ?>
                    <!-- Menu pour le client -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>/client/search_car.php">Rechercher une Voiture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>/client/reservations.php">Mes Réservations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>/client/logout.php">Se Déconnecter</a>
                    </li>
                <?php else: ?>
                    <!-- Menu pour les visiteurs non connectés -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>/login.php">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>/register.php">Inscription</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <!-- Contenu de la page ici -->
</div>

</body>
</html>
