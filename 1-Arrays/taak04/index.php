<?php

$speelgoed = [

    [
        'naam' => 'bal',
        'soort' => 'sport',
        'prijs' => '5.00'
    ],
    [
        'naam' => 'knuffelbeer',
        'soort' => 'knuffels',
        'prijs' => '9.50'
    ],
    [
        'naam' => 'Catan',
        'soort' => 'bordspel',
        'prijs' => '39.00'
    ],
];

    echo "Naam van het speelgoed".$speelgoed[0]['naam']."soort is ".$speelgoed[0]['soort'].
         "prijs".$speelgoed[0]['prijs']."<br>";
    echo "Naam van het speelgoed".$speelgoed[1]['naam']."soort is ".$speelgoed[1]['soort'].
         "prijs".$speelgoed[1]['prijs']."<br>";
    echo "Naam van het speelgoed".$speelgoed[2]['naam']."soort is ".$speelgoed[2]['soort'].
         "prijs".$speelgoed[2]['prijs']."<br>";

$games = [
    'sport' => [
        'naam' => 'Fifa',
        'uitgever' => 'EA',
        'prijs' => '60.00'
    ],
    'action' => [
        'naam' => 'Doom',
        'uitgever' => 'Bethesda',
        'prijs' => '60.00'
    ],
    'fps' => [
        'naam' => 'Left for dead 2',
        'uitgever' => 'Valve',
        'prijs' => '40.00'
    ]
];

    echo "Naam van het games".$games['sport']['naam']."uitgever is ".$games['sport']['uitgever'].
         "prijs".$games['sport']['prijs']."<br>";
    echo "Naam van het games".$games['action']['naam']."uitgever is ".$games['action']['uitgever'].
         "prijs".$games['action']['prijs']."<br>";
    echo "Naam van het games".$games['fps']['naam']."uitgever is ".$games['fps']['uitgever'].
         "prijs".$games['fps']['prijs']."<br>";
