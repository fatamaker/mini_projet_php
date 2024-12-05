<?php
session_start();
include 'includes/db.php';

define('BASE_URL', '/location_voiture');


define('img_URL', '/location_voiture/assets/images');


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
        background-color: #f0f2f5;
            margin: 0;
            padding: 0;
          
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

         .login-container {
            width: 600px;
            padding: 60px;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3); /* Bokeh shadow effect */
            backdrop-filter: blur(15px); /* Blur effect */
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.3); /* Optional border for styling */
        }


        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
        }

        .login-container label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 30px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .login-container input:focus {
            border-color: #4a90e2;
            box-shadow: 0 0 5px rgba(74, 144, 226, 0.5);
            outline: none;
        }

        .login-container button {
            width: 104%;
            padding: 10px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-container button:hover {
            background-color: #357abd;
        }

        .login-container .error-message {
            color: #d9534f;
            background-color: #f9d6d5;
            border: 1px solid #d9534f;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 14px;
        }
        .login-container .logo {
            width: 140px;
    
        }


        .login-container .alternate {
            margin-top: 30px;
           
        }
    </style>
</head>
<body>
    <div class="login-container">
    <img src="<?= img_URL ?>/logo.png" alt="Logo" class="logo">
        <h2>Se connecter</h2>

        <?php if (isset($error)): ?>
            <div class="error-message">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <form method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Se connecter</button>
        </form>

        <div class="alternate">
            Vous n'avez pas de compte ? <a href="<?= BASE_URL ?>/register.php" style="margin">Inscrivez-vous ici</a>
        </div>
    </div>
</body>
</html>
