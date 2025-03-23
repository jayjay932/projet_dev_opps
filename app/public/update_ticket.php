<?php
require_once '../vendor/autoload.php';

use App\Page;
session_start();

if (!isset($_SESSION['users']) || $_SESSION['users']['role'] !== 'Technicien') {
    header('Location: index.php');
    exit();
}

$page = new Page();
$pdo = $page->pdo;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> b29a987 (Premier commit)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ticket_id'], $_POST['statut'])) {
    $ticket_id = $_POST['ticket_id'];
    $new_statut = $_POST['statut'];

    try {
        $sql = "UPDATE tickets SET statut = :statut, date_mise_a_jour = NOW() WHERE id = :ticket_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":statut" => $new_statut,
            ":ticket_id" => $ticket_id
        ]);

        $_SESSION['msg'] = "Le statut du ticket a été mis à jour.";
    } catch (PDOException $e) {
        $_SESSION['msg'] = "Erreur lors de la mise à jour : " . $e->getMessage();
<<<<<<< HEAD
=======
=======
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ticketId = $_POST['ticket_id'];
    $newStatut = $_POST['statut'] ?? null;
    $commentaire = $_POST['commentaire'] ?? null;
    $technicienId = $_POST['technicien_id']; // ID du technicien qui met à jour

    try {
        $pdo->beginTransaction();

        if ($newStatut) {
            $sql = "UPDATE tickets SET statut = :statut, date_mise_a_jour = NOW() WHERE id = :ticket_id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ":statut" => $newStatut,
                ":ticket_id" => $ticketId
            ]);
            $_SESSION['msg'] = "Le statut du ticket a été mis à jour.";
        }

        if ($commentaire) {
            // Récupérer l'ID de l'employé lié au ticket
            $query = $pdo->prepare("SELECT id_users FROM tickets WHERE id = ?");
            $query->execute([$ticketId]);
            $ticket = $query->fetch();

            if ($ticket) {
                $idEmploye = $ticket['id_users'];

                // Insérer le commentaire dans la table des commentaires
                $stmt = $pdo->prepare("INSERT INTO commentaires (ticket_id, commentaire, auteur_id, date_creation) VALUES (?, ?, ?, NOW())");
                $stmt->execute([$ticketId, $commentaire, $technicienId]);

                // Créer une notification pour l'employé
                $stmt = $pdo->prepare("INSERT INTO notifications (id_users, message) VALUES (?, ?)");
                $stmt->execute([$idEmploye, "Un technicien a mis à jour le ticket #$ticketId"]);

                echo json_encode(["success" => true, "message" => "Mise à jour effectuée et notification envoyée"]);
            } else {
                echo json_encode(["error" => "Ticket non trouvé"]);
            }
        }

        $pdo->commit();
    } catch (PDOException $e) {
        $pdo->rollBack();
        $_SESSION['msg'] = "Erreur lors de la mise à jour : " . $e->getMessage();
        echo json_encode(["error" => "Erreur lors de la mise à jour : " . $e->getMessage()]);
>>>>>>> 18d1d6f (Ajout de ma partie)
>>>>>>> b29a987 (Premier commit)
    }
}

header('Location: tickets_technicien.php');
exit();
