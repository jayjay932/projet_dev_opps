<?php




require_once '../vendor/autoload.php';

use App\Repository\UserRepository;
use App\Page;

$page = new Page();
$userRepo = new UserRepository($page->pdo);
$msg = false;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['send'])) {
    $user = $userRepo->getUserByEmail([
        'email' => $_POST['email'],
    ]);
    
    if (!$user) {
        $msg = "Email ou mot de passe incorrect";
    } else {
        if (password_verify($_POST['password'], $user['mot_de_passe'])) {
            $msg = "Connexion réussie";
            
            $page->Session->add('users', $user);
            // Ajouter une vérification pour rediriger les admins vers le tableau de bord
            if ($user['role'] == 'Admin') {
                header('Location: dashboard_admin.php');
                exit();
            } elseif ($user['role'] == 'Technicien') {
                header('Location: tickets_technicien.php');
                exit();
            } elseif ($user['role'] == 'Employé') {
                header('Location: dashboard_employe.php');
                exit();
            } else {
           
            }
        } else {
            $msg = "Mot de passe incorrect";
        }
    }
}

echo $page->render('index.html.twig', ['msg' => $msg]);
?>