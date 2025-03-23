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
<<<<<<< HEAD
$tickets = $stmtTickets->fetchAll();
=======
<<<<<<< HEAD
$tickets = $stmtTickets->fetchAll();
=======
$tickets = $stmtTickets->fetchAll(PDO::FETCH_ASSOC);
>>>>>>> 18d1d6f (Ajout de ma partie)
>>>>>>> b29a987 (Premier commit)

// Récupérer la liste des techniciens disponibles
$sqlTechniciens = "SELECT id, nom, email FROM users WHERE role = 'Technicien'";
$stmtTechniciens = $pdo->query($sqlTechniciens);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> b29a987 (Premier commit)
$techniciens = $stmtTechniciens->fetchAll();

// Traiter le formulaire d'attribution
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
<<<<<<< HEAD
=======
=======
$techniciens = $stmtTechniciens->fetchAll(PDO::FETCH_ASSOC);

// Traiter le formulaire d'attribution
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['assign_technician'])) {
>>>>>>> 18d1d6f (Ajout de ma partie)
>>>>>>> b29a987 (Premier commit)
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

<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 18d1d6f (Ajout de ma partie)
>>>>>>> b29a987 (Premier commit)
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

<<<<<<< HEAD

// Affichage du template Twig avec les tickets, techniciens et le message
=======
<<<<<<< HEAD

// Affichage du template Twig avec les tickets, techniciens et le message
=======
// Récupérer tous les utilisateurs
$users = $pdo->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);

// Ajout d'un utilisateur
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_user'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Vérifier si l'email existe déjà
    $stmtCheckEmail = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
    $stmtCheckEmail->execute([$email]);
    if ($stmtCheckEmail->fetchColumn() > 0) {
        $msg = "Erreur : L'adresse e-mail est déjà utilisée.";
    } else {
        $stmt = $pdo->prepare("INSERT INTO users (nom, email, mot_de_passe, role, date_inscription) VALUES (?, ?, ?, ?, NOW())");
        $stmt->execute([$nom, $email, $password, $role]);
        $_SESSION['msg'] = "Utilisateur ajouté avec succès !";
        header('Location: dashboard_admin.php');
        exit();
    }
}

// Modification d'un utilisateur
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_user'])) {
    $user_id = $_POST['user_id'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $stmt = $pdo->prepare("UPDATE users SET nom = ?, email = ?, role = ? WHERE id = ?");
    $stmt->execute([$nom, $email, $role, $user_id]);
    $_SESSION['msg'] = "Utilisateur modifié avec succès !";
    header('Location: dashboard_admin.php');
    exit();
}

// Suppression d'un utilisateur
if (isset($_GET['delete_id'])) {
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    $stmt->execute([$_GET['delete_id']]);
    $_SESSION['msg'] = "Utilisateur supprimé !";
    header('Location: dashboard_admin.php');
    exit();
}

// Récupérer le nombre total de tickets ouverts et résolus
$sqlStatsTickets = "SELECT 
                        SUM(CASE WHEN statut = 'Ouvert' THEN 1 ELSE 0 END) AS total_ouverts,
                        SUM(CASE WHEN statut = 'Résolu' THEN 1 ELSE 0 END) AS total_resolus
                    FROM tickets";
$stmtStatsTickets = $pdo->query($sqlStatsTickets);
$statsTickets = $stmtStatsTickets->fetch(PDO::FETCH_ASSOC);

// Récupérer le temps moyen de résolution par technicien
$sqlTempsResolution = "SELECT 
                            u.nom AS technicien,
                            AVG(TIMESTAMPDIFF(HOUR, t.date_creation, t.date_resolution)) AS temps_moyen_resolution
                        FROM tickets t
                        JOIN users u ON t.id_technicien = u.id
                        WHERE t.statut = 'Résolu' AND t.date_resolution IS NOT NULL
                        GROUP BY u.nom";
$stmtTempsResolution = $pdo->query($sqlTempsResolution);
$tempsResolution = $stmtTempsResolution->fetchAll(PDO::FETCH_ASSOC);

// Récupérer les tickets critiques (priorité haute)
$sqlTicketsCritiques = "SELECT * FROM tickets WHERE priorite = 'Haute' AND statut IN ('Ouvert', 'En cours')";
$stmtTicketsCritiques = $pdo->query($sqlTicketsCritiques);
$ticketsCritiques = $stmtTicketsCritiques->fetchAll(PDO::FETCH_ASSOC);

// Affichage du template Twig avec les tickets, techniciens, utilisateurs, le message et les statistiques
>>>>>>> 18d1d6f (Ajout de ma partie)
>>>>>>> b29a987 (Premier commit)
echo $page->render('assign_technician_to_ticket.html.twig', [
    'tickets' => $tickets,
    'techniciens' => $techniciens,
    'commentaires' => $commentaires,
<<<<<<< HEAD
    'msg' => $msg
=======
<<<<<<< HEAD
    'msg' => $msg
=======
    'users' => $users,
    'msg' => $msg,
    'statsTickets' => $statsTickets,
    'tempsResolution' => $tempsResolution,
    'ticketsCritiques' => $ticketsCritiques
>>>>>>> 18d1d6f (Ajout de ma partie)
>>>>>>> b29a987 (Premier commit)
]);

?>
