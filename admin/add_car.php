<?php
include '../includes/db.php'; // Connexion à la base
include '../includes/header.php'; // En-tête
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $annee = $_POST['annee'];
    $immatriculation = $_POST['immatriculation'];
    
    $query = "INSERT INTO voitures (marque, modele, annee, immatriculation) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$marque, $modele, $annee, $immatriculation]);

    echo "<div class='alert alert-success'>Voiture ajoutée avec succès!</div>";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


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

        /* Login form container */
        .container-login {
            max-width: 700px;
            margin: auto;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 49px;
        }

        .container-login h2 {
            color: #333;
        }

        .container-login .form-label {
            font-weight: bold;
        }

        .container-login .form-control {
            border-radius: 4px;
        }
        
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 10px;
            transition: all 0.3s ease-in-out;
        }
        .form-control:focus {
        border-color: #494b4e; /* Blue border on focus */
        box-shadow: 0 0 5px rgba(124, 125, 126, 0.5);
        }

        .btn-dark {
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
            width: 100%;
        }
        .alert-danger {
            color: #ff0000;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            padding: 10px;
        }
    </style>
</head>
<body>

<div class="container-login mt-4">
    <h2>Ajouter une Voiture</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="marque" class="form-label">Marque</label>
            <input type="text" name="marque" class="form-control" id="marque" required>
        </div>
        <div class="mb-3">
            <label for="modele" class="form-label">Modèle</label>
            <input type="text" name="modele" class="form-control" id="modele" required>
        </div>
        <div class="mb-3">
            <label for="annee" class="form-label">Année</label>
            <input type="number" name="annee" class="form-control" id="annee" required>
        </div>
        <div class="mb-3">
            <label for="immatriculation" class="form-label">Immatriculation</label>
            <input type="text" name="immatriculation" class="form-control" id="immatriculation" required>
        </div>
        <button type="submit" class="btn btn-dark">Ajouter</button>
    </form>
</div>


</body>
</html>

