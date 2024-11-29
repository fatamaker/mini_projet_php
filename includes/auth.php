<?php
if (!isset($_SESSION['client_id'])) {
    header("Location: /client/login.php");
    exit();
}
?>
