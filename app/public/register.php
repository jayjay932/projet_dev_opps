<?php
require_once '../vendor/autoload.php';

use App\Page;
use App\Repository\UserRepository;

$page = new Page();
$userRepo = new UserRepository($page->pdo);
$title = "Register";

if (isset($_POST['send'])) {
    $data = [
        'Nom'         => $_POST['Nom'],
        'email' => $_POST['email'],
        'mot_de_passe'  => password_hash($_POST['password'], PASSWORD_DEFAULT),
        'role'        => 'Employé',
        'date_inscription'  => date('Y-m-d H:i:s'),
  
    ];
    
    // $password = $_POST['password'];
    // var_dump($password);

    $userRepo->insertUser('users', $data);

    header('Location: index.php');
}

echo $page->render('register.html.twig', ['title' => $title]);
