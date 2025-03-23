<?php
session_start();
require_once '../vendor/autoload.php';
use App\Page;

if (!isset($_SESSION['users']) || $_SESSION['users']['role'] !== 'Admin') {
    header('Location: index.php');
    exit();
}

$page = new Page();
$pdo = $page->pdo;
$msg = "";

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
        header('Location: admin_users.php');
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
    header('Location: admin_users.php');
    exit();
}

// Suppression d'un utilisateur
if (isset($_GET['delete_id'])) {
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    $stmt->execute([$_GET['delete_id']]);
    $_SESSION['msg'] = "Utilisateur supprimé !";
    header('Location: admin_users.php');
    exit();
}

// Récupérer tous les utilisateurs
$users = $pdo->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);

// Inclure le template Twig
$loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($loader);

echo $twig->render('assign_technician_to_ticket.html.twig', [
    'users' => $users,
    'msg' => $_SESSION['msg'] ?? null
]);
?>
