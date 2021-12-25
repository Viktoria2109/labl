<?php

global $pdo;
$pdo = new PDO(
   dsn: 'mysql:host=localhost:3306;dbname=test;',
   username: "root",
    password: "qwerty"
);
$pdo->exec("set names utf8");
?>