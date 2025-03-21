<?php

require_once '../vendor/autoload.php';

use App\Page;

session_start();

if (!isset($_SESSION['users'])) {
    // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
    header('Location: index.php');
    exit();
} 

// Vérifier que l'utilisateur est un employé
if ($_SESSION['users']['role'] !== 'Employé') {
    // Si l'utilisateur n'est pas un employé, rediriger vers la page d'accueil (ou une autre page spécifique)
    header('Location: index.php');
    exit();
}

$page = new Page();
$pdo = $page->pdo;
$msg = "";

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['titre']) && !empty($_POST['description']) && !empty($_POST['priorite'])) {
        $titre = htmlspecialchars($_POST['titre']);
        $description = htmlspecialchars($_POST['description']);
        $priorite = $_POST['priorite'];
        $id_employe = $_SESSION['users']['id']; // Récupérer l'ID de l'employé connecté

        echo "ID de l'utilisateur connecté : " . $id_employe;


        try {
            $sql = "INSERT INTO tickets (titre, description, priorite, id_employe) 
                    VALUES (:titre, :description, :priorite, :id_employe)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ":titre" => $titre,
                ":description" => $description,
                ":priorite" => $priorite,
                ":id_employe" => $id_employe
            ]);
            $msg = "Ticket créé avec succès !";
        } catch (PDOException $e) {
            $msg = "Erreur lors de la création du ticket : " . $e->getMessage();
        }
    } else {
        $msg = "Veuillez remplir tous les champs.";
    }
}

// Affichage du template Twig avec le message
echo $page->render('create_ticket.html.twig', [
    'msg' => $msg
]);

?>
