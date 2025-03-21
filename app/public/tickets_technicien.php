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
$msg = isset($_SESSION['msg']) ? $_SESSION['msg'] : "";
unset($_SESSION['msg']);

$technicien_id = $_SESSION['users']['id']; // ID du technicien connecté

try {
    $sql = "SELECT tickets.id, tickets.titre, tickets.description, tickets.statut, tickets.priorite, 
                   users.nom AS nom_employe
            FROM tickets
            JOIN users ON tickets.id_employe = users.id
            WHERE tickets.statut != 'Fermé' AND tickets.id_technicien = :technicien_id"; // Filtrer par technicien assigné
    
    // Préparer la requête
    $stmt = $pdo->prepare($sql);
    
    // Exécuter la requête avec le paramètre du technicien
    $stmt->execute([
        ":technicien_id" => $technicien_id
    ]);
    
    // Récupérer les tickets associés
    $tickets = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $msg = "Erreur de récupération des tickets : " . $e->getMessage();
}









// Si un commentaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['commentaire']) && isset($_POST['ticket_id'])) {
        $commentaire = htmlspecialchars($_POST['commentaire']);
        $ticket_id = $_POST['ticket_id'];

        if (isset($_POST['commentaire_id'])) {  // Mise à jour d'un commentaire existant
            $commentaire_id = $_POST['commentaire_id'];

            try {
                // Mise à jour du commentaire dans la base de données
                $sql = "UPDATE commentaires 
                        SET commentaire = :commentaire 
                        WHERE id = :commentaire_id AND id_ticket = :ticket_id AND id_users = :technicien_id";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':commentaire' => $commentaire,
                    ':commentaire_id' => $commentaire_id,
                    ':ticket_id' => $ticket_id,
                    ':technicien_id' => $technicien_id
                ]);

                $_SESSION['msg'] = "Commentaire mis à jour avec succès !";
                header("Location: tickets_technicien.php");
                exit();
            } catch (PDOException $e) {
                $_SESSION['msg'] = "Erreur lors de la mise à jour du commentaire : " . $e->getMessage();
                header("Location: tickets_technicien.php");
                exit();
            }
        } else {  // Ajout d'un nouveau commentaire
            try {
                // Insertion du commentaire dans la base de données
                $sql = "INSERT INTO commentaires (id_ticket, id_users, commentaire) 
                        VALUES (:ticket_id, :technicien_id, :commentaire)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':ticket_id' => $ticket_id,
                    ':technicien_id' => $technicien_id,
                    ':commentaire' => $commentaire
                ]);

                $_SESSION['msg'] = "Commentaire ajouté avec succès !";
                header("Location: tickets_technicien.php");
                exit();
            } catch (PDOException $e) {
                $_SESSION['msg'] = "Erreur lors de l'ajout du commentaire : " . $e->getMessage();
                header("Location: tickets_technicien.php");
                exit();
            }
        }
    }
}





echo $page->render('tickets_technicien.html.twig', [
    'tickets' => $tickets,
    'msg' => $msg
]);
