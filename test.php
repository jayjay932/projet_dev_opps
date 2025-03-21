<?php
require_once 'vendor/autoload.php';

// Charger Twig
$loader = new \Twig\Loader\FilesystemLoader('templates'); // Assure-toi que le dossier 'templates' existe
$twig = new \Twig\Environment($loader);

// Tester un rendu Twig
echo $twig->render('test.html.twig', ['message' => 'Twig fonctionne !']);
?>
