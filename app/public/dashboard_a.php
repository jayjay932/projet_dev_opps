<?php
require_once '../vendor/autoload.php';
use App\Page;
$msg=false;
$page = new Page();

use App\Repository\UserRepository;

$userRepo = new UserRepository($page->pdo);

if (!isset($_SESSION['users'])){
    header('Location: index.php');
}

$userData = $page->Session->get('users');
$title = "dashboard_admin";

$sqluser = "SELECT COUNT(*) AS total FROM users";
$sthuser = $page->pdo->prepare($sqluser);
$sthuser->execute();

$sqlmail = "SELECT COUNT(DISTINCT email) AS total FROM users
";
$sthmail = $page->pdo->prepare($sqlmail);
$sthmail->execute();


echo $page->render('dashboard.html.twig', [
    'totalUsers' => $sthuser->fetch(PDO::FETCH_ASSOC)['total'],
    'totalMail' => $sthmail->fetch(PDO::FETCH_ASSOC)['total'],
    'msg' => $msg, 'userData' => $userData,'title' => $title
    
]);
