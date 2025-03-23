<?php
require '../config/db.php';

session_start();

if (!isset($_SESSION['user_id'])) {
    echo json_encode(["error" => "Utilisateur non authentifié"]);
    exit();
}

$idEmploye = $_SESSION['user_id'];

try {
    $stmt = $conn->prepare("UPDATE notifications SET vu = 1 WHERE id_users = ?");
    $stmt->execute([$idEmploye]);

    echo json_encode(["success" => true]);
} catch (PDOException $e) {
    echo json_encode(["error" => "Erreur lors de la mise à jour des notifications : " . $e->getMessage()]);
}
?>
