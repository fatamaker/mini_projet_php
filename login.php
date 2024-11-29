<?php
session_start();
include 'includes/db.php';
include 'includes/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérification dans la table des admins
    $stmt = $conn->prepare("SELECT * FROM admins WHERE email = ?");
    $stmt->execute([$email]);
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);
  
    

    if ($admin && password_verify($password, $admin['mot_de_passe'])) {
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_email'] = $admin['email'];
        header("Location: admin/list_cars.php");
        exit();
    }

    // Vérification dans la table des clients
    $stmt = $conn->prepare("SELECT * FROM clients WHERE email = ?");
    $stmt->execute([$email]);
    $client = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($client && password_verify($password, $client['mot_de_passe'])) {
        $_SESSION['client_id'] = $client['id'];
        $_SESSION['client_nom'] = $client['nom'];
        header("Location: client/search_car.php");
        exit();
    }

    $error = "Email ou mot de passe incorrect.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location de Voitures - Se connecter</title>

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
            color: black !important;
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

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
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

<div class="container-login">
    <h2>Se connecter</h2>

    <form method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="password" class="form-control" id="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
</div>

</body>
</html>
