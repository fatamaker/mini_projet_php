<?php

include 'includes/db.php';

define('BASE_URL', '/location_voiture');


define('img_URL', '/location_voiture/assets/images');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $query = "INSERT INTO clients (nom, adresse, numero_telephone, email, mot_de_passe) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$nom, $adresse, $telephone, $email, $password]);

    $successMessage = "Inscription réussie! Vous pouvez maintenant vous connecter.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
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

        .registration-container {
            display: flex;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 800px;
            max-width: 100%;
        }

        .illustration {
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
            width: 50%;
        }

        .illustration img {
            max-width: 100%;
            height: auto;
        }

        .form-container {
            padding: 40px;
            width: 50%;
        }

        h2 {
            text-align: center;
            color: #343a40;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-control:focus {
            border-color: #494b4e;
            outline: none;
            box-shadow: 0 0 4px rgba(0, 123, 255, 0.5);
        }


        .btn-submit {
            width: 50%;
            background-color: #343a40;
            color: #fff;
            padding: 10px 15px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #495057;
        }

        .alert {
            text-align: center;
            padding: 10px;
            margin-top: 20px;
            color: #fff;
            background-color: #28a745;
            border-radius: 5px;
        }
        .login-link {
    text-align: right;
    margin-top: 30PX;
    font-size: 16px;
}

        .login-link a {
    color: #010102;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
}

.login-link a:hover {
    color: #626263;
}

.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    padding: 10px 15px;
    margin-bottom: 15px;
    margin-left: 30px;
    margin-right: 20px;
    border-radius: 5px;
    font-size: 16px;
    text-align: center;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    animation: fadeIn 0.5s ease-in-out;
}

/* Animation for the message */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}


    </style>
</head>
<body>
    <div class="registration-container">
        <div class="illustration">
            <img src="<?= img_URL ?>/logo.png" alt="Illustration"> <!-- Replace with your illustration image -->
        </div>
        <div class="form-container">
            <h2>Inscription</h2>
            <form method="POST">
            <?php if (!empty($successMessage)) : ?>
                    <div class="alert alert-success"><?= $successMessage ?></div>
                <?php endif; ?>
                <label for="nom" class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" id="nom" required>

                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" name="adresse" class="form-control" id="adresse" required>

                <label for="telephone" class="form-label">Téléphone</label>
                <input type="text" name="telephone" class="form-control" id="telephone" required>

                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>

                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="password" required>

                <button type="submit" class="btn-submit">S'inscrire</button>
            </form>
            <div class="login-link">
            <a class="nav-link" href="<?= BASE_URL ?>/login.php">Se connecter</a>
            </div>
        </div>
    </div>
</body>
</html>
