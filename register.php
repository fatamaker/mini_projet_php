<?php
include 'includes/db.php';
include 'includes/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $query = "INSERT INTO clients (nom, adresse, numero_telephone, email, mot_de_passe) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$nom, $adresse, $telephone, $email, $password]);

    echo "<div class='alert alert-success'>Inscription réussie! Vous pouvez maintenant vous connecter.</div>";
}
?>
 <style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f0f2f5;
    margin: 0;
    padding: 0;
}

.container-inscri {
    max-width: 600px;
    margin: 50px auto;
    background-color: #ffffff; /* Clean white background */
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease-in-out;
}

.container-inscri:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #343a40; /* Dark gray */
    font-size: 28px;
    font-weight: bold;
}

.form-label {
    font-weight: 600;
    color: #495057; /* Slightly darker gray */
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

.alert {
    font-size: 16px;
    text-align: center;
    margin-bottom: 15px;
}

@media (max-width: 768px) {
    .container-inscri {
        padding: 20px;
    }

    h2 {
        font-size: 24px;
    }
}
</style>


<div class="container-inscri mt-4">
    <h2>Inscription</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" id="nom" required>
        </div>
        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" name="adresse" class="form-control" id="adresse" required>
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label">Téléphone</label>
            <input type="text" name="telephone" class="form-control" id="telephone" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="password" class="form-control" id="password" required>
        </div>
        <button type="submit" class="btn btn-dark">S'inscrire</button>
    </form>
</div>

