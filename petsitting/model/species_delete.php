<?php


require_once __DIR__ . '/../pdo.php';
require_once __DIR__ . '/../utils.php';

$sql = 'DELETE FROM species WHERE id=id';
$q = $pdo->prepare($sql);
$q->bindValue(':id',$id,PDO::PARAM_INT);
$success = $q->execute();
var_dump($success);