<?php
require_once __DIR__ . '/../pdo.php';
require_once __DIR__ . '/../utils.php';

$espece = [
    'id'   => 1,
    'name' => 'cheval',
];

$sql = 'UPDATE species SET species = :species WHERE id = :id';

$q = $pdo->prepare($sql);
$q->bindValue(':species', $espece['name'], PDO::PARAM_STR);
$q->bindValue(':id', $espece['id'], PDO::PARAM_INT);

$success = $q->execute();

var_dump($success);           // true/false
echo ' rows: '.$q->rowCount(); // câte rânduri s-au modificat

