<?php
$host = 'mysql';  // Utiliser localhost si tu utilises php -S
$dbname = 'support_tickets';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;port=3306", $username, $password);
    // Définir l'attribut pour lever une exception sur erreur
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Échec de la connexion à la base de données : ' . $e->getMessage();
}
?>
