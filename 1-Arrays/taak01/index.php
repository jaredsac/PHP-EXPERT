<?php

$medewerkers = [
    [
      'voornaam' => 'Willem',
      'achternaam' => 'van Oranje',
      'functie'  => 'koning'
    ],
    [
      'voornaam' => 'Donald',
      'achternaam' => 'Trump',
      'functie'  => 'president'
    ]
  ];

  echo "<h2>". $medewerkers[0]['voornaam'] . "\n" . $medewerkers[0]['achternaam'] . "\n" .  "is een " ."\n".  $medewerkers[0]['functie'] . "</h2>";
  echo "<h2>". $medewerkers[1]['voornaam'] . "\n" . $medewerkers[1]['achternaam'] . "\n" .  "is een " ."\n".  $medewerkers[1]['functie'] . "</h2>";

?>