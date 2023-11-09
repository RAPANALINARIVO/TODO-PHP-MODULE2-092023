<?php
include('config/db.php');
//parametre de la connexion

$dsn= 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
$username= DB_USER;
$passeword=DB_PASSEWORD;

try {
    //creation de l'objet PDO
    $pdo=new PDO($dsn,$username,$passeword);

    //configuration de la connexion 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // vous etes connnectes  a votre base de donnees

} catch (PDOException $e) {
    //throw $e en cas d'erreur;

    echo 'erreur de connexion '.$e->getMessage();
}


