<?php

$dsn = 'mysql:host=db;dbname=appdb';
$user = 'appuser';
$pass = 'password';

try{
    $pdo = new PDO($dsn, $user, $pass);
    echo 'SUCCESS!' . PHP_EOL;
} catch (PDOException $e) {
    echo 'FAILURE...' . $e->getMessage() . PHP_EOL;
    exit();
}
