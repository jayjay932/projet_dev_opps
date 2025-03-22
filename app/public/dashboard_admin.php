<?php

require_once '../vendor/autoload.php';

use App\Page;

session_start();

// Vérification de l'accès Admin
if (!isset($_SESSION['users']) || $_SESSION['users']['role'] !== 'Admin') {
    header('Location: index.php');
    exit();
}

$page = new Page();
$pdo = $page->pdo;
$msg = "";

// Récupérer la liste des tickets ouverts (statut "Ouvert" ou "En cours")
$sqlTickets = "SELECT t.id, t.titre, t.description, t.statut, t.priorite, t.id_employe, t.id_technicien, u.nom AS nom_employe, 
                    IFNULL(technicien.nom, 'Aucun technicien assigné') AS technicien_assigne
               FROM tickets t
               JOIN users u ON t.id_employe = u.id
               LEFT JOIN users technicien ON t.id_technicien = technicien.id
               WHERE t.statut IN ('Ouvert', 'En cours')";
$stmtTickets = $pdo->query($sqlTickets);
$tickets = $stmtTickets->fetchAll();

// Récupérer la liste des techniciens disponibles
$sqlTechniciens = "SELECT id, nom, email FROM users WHERE role = 'Technicien'";
$stmtTechniciens = $pdo->query($sqlTechniciens);
$techniciens = $stmtTechniciens->fetchAll();

// Traiter le formulaire d'attribution
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['ticket_id']) && !empty($_POST['technicien_id'])) {
        $ticket_id = $_POST['ticket_id'];
        $technicien_id = $_POST['technicien_id'];

        // Mise à jour du ticket avec le technicien
        try {
            $sqlUpdate = "UPDATE tickets SET id_technicien = :technicien_id WHERE id = :ticket_id";
            $stmtUpdate = $pdo->prepare($sqlUpdate);
            $stmtUpdate->execute([
                ":technicien_id" => $technicien_id,
                ":ticket_id" => $ticket_id
            ]);
            $msg = "Technicien attribué au ticket avec succès !";
        } catch (PDOException $e) {
            $msg = "Erreur lors de l'attribution du technicien : " . $e->getMessage();
        }
    } else {
        $msg = "Veuillez sélectionner un ticket et un technicien.";
    }
}


// Récupération des commentaires pour chaque ticket
$commentaires = [];
$sqlCommentaire = "SELECT * FROM commentaires WHERE id_ticket = :ticket_id";
$stmtCommentaire = $pdo->prepare($sqlCommentaire);

foreach ($tickets as $ticket) {
    $stmtCommentaire->execute([
        ':ticket_id' => $ticket['id']
    ]);
    $commentaires[$ticket['id']] = $stmtCommentaire->fetchAll(PDO::FETCH_ASSOC);
}


// Affichage du template Twig avec les tickets, techniciens et le message
echo $page->render('assign_technician_to_ticket.html.twig', [
    'tickets' => $tickets,
    'techniciens' => $techniciens,
    'commentaires' => $commentaires,
    'msg' => $msg
]);

?>
