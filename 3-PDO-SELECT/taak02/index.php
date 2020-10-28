<?php

$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = "SELECT * FROM locations";
$statement = $db_conn->prepare($sql); //haal alle gebruikers op uit de database toolsforever
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($database_gegevens as $locations){  
  echo $locations['name'] . "<br>";
  echo "Adres :" . $locations['address'] . "<br>";
  echo "Stad :" .$locations['city'] . "<br>";
}