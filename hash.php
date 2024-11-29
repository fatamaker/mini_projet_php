<?php
include 'includes/db.php'; // Adjust this path if needed

// Migrate admin passwords
$stmt = $conn->query("SELECT id, mot_de_passe FROM admins");
while ($admin = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $hashed_password = password_hash($admin['mot_de_passe'], PASSWORD_DEFAULT);
    $update_stmt = $conn->prepare("UPDATE admins SET mot_de_passe = ? WHERE id = ?");
    $update_stmt->execute([$hashed_password, $admin['id']]);
}
echo "Admin passwords hashed successfully!<br>";

?>
