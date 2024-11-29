<?php
include '../includes/db.php';
session_start();

if (!isset($_SESSION['client_id'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'], $_GET['date_debut'], $_GET['date_fin'])) {
    $voiture_id = $_GET['id'];
    $date_debut = $_GET['date_debut'];
    $date_fin = $_GET['date_fin'];
    $client_id = $_SESSION['client_id'];

    $query = "INSERT INTO reservations (voiture_id, client_id, date_debut, date_fin) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$voiture_id, $client_id, $date_debut, $date_fin]);

    echo "<div class='alert alert-success'>Réservation confirmée!</div>";
    header("Location: reservations.php");
    exit();
} else {
    echo "<div class='alert alert-danger'>Informations manquantes pour la réservation.</div>";
}
?>
