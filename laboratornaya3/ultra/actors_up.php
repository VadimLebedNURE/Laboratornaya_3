<?php

$dsn = "mysql:host=localhost; dbname=lab1var4";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);

    $actorName = "SELECT ACTOR_NAME FROM actor";

    $outputActor[] = array();

    unset($outputActor[0]);

    foreach ($dbh->query($actorName) as $row) {
        $outputActor[] .= $row['ACTOR_NAME'];
    }
} catch (PDOException $e) {
    echo "Ошибка";
}