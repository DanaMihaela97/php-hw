<?php
require 'config.php';
$dsn = "mysql:host=$host;port=3307;dbname=$database;";
try{
    $pdo = new PDO($dsn, username: $user, password: $password);
    if($pdo){
        echo "Connected successfully!$database";
        return $pdo;
    }
} catch (PDOException $e){
    echo $e->getMessage();
}