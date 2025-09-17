<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$form = [
    'species' => 'NAC'
];

require_once __DIR__ . '/../pdo.php';
require_once __DIR__ . '/../utils.php';

$sql = "INSERT INTO species(species) VALUES (:espece)";
$q = $pdo->prepare($sql);
$q->bindValue(':espece', $form['species'], PDO::PARAM_STR);
$success = $q->execute();

echo $pdo->lastInsertId() . '<br>';
var_dump($success);




