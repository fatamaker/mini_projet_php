<?php
define('BASE_URL', '/location_voiture');
session_start();
session_unset(); // Libère toutes les variables de session
session_destroy(); // Détruit la session

// Redirection vers la page de login
header("Location: " . BASE_URL . "/login.php");
exit();
?>
