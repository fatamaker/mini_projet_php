<?php
include '../includes/db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM voitures WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$id]);
    echo "<div class='alert alert-success'>Voiture supprimée avec succès!</div>";
    header("Location: list_cars.php");
    exit();
} else {
    echo "<div class='alert alert-danger'>Aucune voiture sélectionnée.</div>";
}
?>
