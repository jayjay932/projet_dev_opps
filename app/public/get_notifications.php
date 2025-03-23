<?php
session_start();
require '../config/db.php';

if (!isset($_SESSION['user_id'])) {
    echo json_encode(["error" => "Utilisateur non authentifié"]);
    exit();
}

$employe_id = $_SESSION['user_id'];

try {
    $sql = "SELECT * FROM notifications WHERE id_users = ? AND vu = 0 ORDER BY date_creation DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$employe_id]);
    $notifications = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($notifications);
} catch (PDOException $e) {
    echo json_encode(["error" => "Erreur lors de la récupération des notifications : " . $e->getMessage()]);
}
?>
