<?php
require '../config/db.php'; // Connexion à la BDD
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ticket_id = $_POST['ticket_id'];
    $user_id = $_SESSION['user_id']; // ID du technicien
    $commentaire = $_POST['commentaire'];

    // Insérer le commentaire
    $sql = "INSERT INTO commentaires (id_ticket, id_users, commentaire) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$ticket_id, $user_id, $commentaire]);

    // Récupérer l'employé assigné au ticket
    $sql = "SELECT id_users FROM tickets WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$ticket_id]);
    $employe_id = $stmt->fetchColumn();

    if ($employe_id) {
        // Ajouter une notification pour l'employé
        $message = "Un technicien a mis à jour le ticket #$ticket_id.";
        $sql = "INSERT INTO notifications (id_users, message) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$employe_id, $message]);
    }

    echo "Commentaire ajouté et notification envoyée.";
}
?>
