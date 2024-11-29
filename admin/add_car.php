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
<div class="container mt-4">
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
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
<?php include '../includes/footer.php'; ?>
