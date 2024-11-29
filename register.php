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
.container-inscri{
  max-width: 700px;
  margin: auto;
  background-color: #f8f9fa; /* Couleur de fond légère */
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
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
        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>
</div>

