<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$form = [
    'name' => 'Minou',
    'is.vaccinated'=> '1',
    'birthday'=> '02/02/2015',
    'species_id'=> '4',
];

require_once __DIR__ . '/../pdo.php';
require_once __DIR__ . '/../utils.php';

$sql = "INSERT INTO animal(name, is_vaccinated, birthday, species_id) VALUES (:name, :is_vaccinated, :birthday, :species_id)";
$q = $pdo->prepare($sql);
$q->bindValue(':name', $animal['name'], PDO::PARAM_STR);
$q->bindValue(':is_vaccinated', $animal['is_vaccinated'], PDO::PARAM_STR);
$q->bindValue(':birthday', $animal['birthday'], PDO::PARAM_STR);
$q->bindValue(':species_id', $animal['species_id'], PDO::PARAM_STR);
$success = $q->execute();