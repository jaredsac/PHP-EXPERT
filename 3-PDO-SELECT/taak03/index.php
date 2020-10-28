<?php

$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = 'SELECT * FROM users WHERE email = :email AND status= :status';
$db_conn->prepare($sql);
$statement->bindParam(":email", $email);
$statement->bindParam(":status", $status);
$user = $statement->fetch();

