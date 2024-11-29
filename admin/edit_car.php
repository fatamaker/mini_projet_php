<?php
include '../includes/db.php';
include '../includes/header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM voitures WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$id]);
    $voiture = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $marque = $_POST['marque'];
        $modele = $_POST['modele'];
        $annee = $_POST['annee'];
        $immatriculation = $_POST['immatriculation'];
        $disponibilite = isset($_POST['disponibilite']) ? 1 : 0;

        $updateQuery = "UPDATE voitures SET marque = ?, modele = ?, annee = ?, immatriculation = ?, disponibilite = ? WHERE id = ?";
        $stmt = $conn->prepare($updateQuery);
        $stmt->execute([$marque, $modele, $annee, $immatriculation, $disponibilite, $id]);

        echo "<div class='alert alert-success'>Voiture modifiée avec succès!</div>";
        $voiture = array_merge($voiture, $_POST);
    }
} else {
    echo "<div class='alert alert-danger'>Aucune voiture sélectionnée.</div>";
    exit();
}
?>
<div class="container mt-4">
    <h2>Modifier une Voiture</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="marque" class="form-label">Marque</label>
            <input type="text" name="marque" class="form-control" id="marque" value="<?= $voiture['marque'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="modele" class="form-label">Modèle</label>
            <input type="text" name="modele" class="form-control" id="modele" value="<?= $voiture['modele'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="annee" class="form-label">Année</label>
            <input type="number" name="annee" class="form-control" id="annee" value="<?= $voiture['annee'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="immatriculation" class="form-label">Immatriculation</label>
            <input type="text" name="immatriculation" class="form-control" id="immatriculation" value="<?= $voiture['immatriculation'] ?>" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" name="disponibilite" class="form-check-input" id="disponibilite" <?= $voiture['disponibilite'] ? 'checked' : '' ?>>
            <label for="disponibilite" class="form-check-label">Disponible</label>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
<?php include '../includes/footer.php'; ?>
