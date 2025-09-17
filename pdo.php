<?php

/**
 * objet pdo : connexion à la base de données
 */
try{
    $pdo = new PDO('mysql:host=localhost; dbname=petsitting','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}catch(Exception $e){
    http_response_code(500);
    die('problème avec la base de données : ' . $e->getMessage());
}