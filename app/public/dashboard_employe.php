<?php
require_once '../vendor/autoload.php';

use App\Page;

session_start();

// Vérification de l'accès Employé
if (!isset($_SESSION['users']) || $_SESSION['users']['role'] !== 'Employé') {
    header('Location: index.php');
    exit();
}

$page = new Page();
$pdo = $page->pdo;
$msg = "";

$employe_id = $_SESSION['users']['id']; // ID de l'employé connecté

// Récupération des tickets de l'employé
$sqlTickets = "SELECT t.id, t.titre, t.description, t.statut, t.priorite, t.id_employe, t.id_technicien, 
                      u.nom AS nom_employe, 
                      IFNULL(technicien.nom, 'Aucun technicien assigné') AS technicien_assigne
               FROM tickets t
               JOIN users u ON t.id_employe = u.id
               LEFT JOIN users technicien ON t.id_technicien = technicien.id
               WHERE t.statut IN ('Ouvert', 'En cours') AND t.id_employe = :employe_id";

$stmtTickets = $pdo->prepare($sqlTickets);
$stmtTickets->execute([
    ':employe_id' => $employe_id
]);

$tickets = $stmtTickets->fetchAll(PDO::FETCH_ASSOC);

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

// Récupérer la liste des techniciens disponibles
$sqlTechniciens = "SELECT id, nom, email FROM users WHERE role = 'Technicien'";
$stmtTechniciens = $pdo->query($sqlTechniciens);
$techniciens = $stmtTechniciens->fetchAll(PDO::FETCH_ASSOC);

<<<<<<< HEAD
// Affichage du template Twig avec les tickets, techniciens et commentaires
=======
<<<<<<< HEAD
// Affichage du template Twig avec les tickets, techniciens et commentaires
=======
// Récupération des notifications non lues
$sqlNotifications = "SELECT * FROM notifications WHERE id_users = ? AND vu = 0 ORDER BY date_creation DESC";
$stmtNotifications = $pdo->prepare($sqlNotifications);
$stmtNotifications->execute([$employe_id]);
$notifications = $stmtNotifications->fetchAll(PDO::FETCH_ASSOC);

// Affichage du template Twig avec les tickets, techniciens, commentaires et notifications
>>>>>>> 18d1d6f (Ajout de ma partie)
>>>>>>> b29a987 (Premier commit)
echo $page->render('dashboard_employe.html.twig', [
    'tickets' => $tickets,
    'techniciens' => $techniciens,
    'commentaires' => $commentaires,
<<<<<<< HEAD
    'msg' => $msg
]);
=======
<<<<<<< HEAD
    'msg' => $msg
]);
=======
    'notifications' => $notifications,
    'msg' => $msg
]);
?>
>>>>>>> 18d1d6f (Ajout de ma partie)
>>>>>>> b29a987 (Premier commit)
