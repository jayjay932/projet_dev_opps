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
    }
}

header('Location: tickets_technicien.php');
exit();
