<?php
$provincies = [
    [
        'provincie' => 'Noord-Holland',
        'hoofdstad' => 'Haarlem',
        'bevolking'  => 2853359,
        'inwoners_gemeente' => 'Amsterdam'       
      ],
      [
        'provincie' => 'Zuid-Holland',
        'hoofdstad' => 'DenHaag',
        'bevolking'  => 3673893,
        'inwoners_gemeente' => 'Rotterdam'       
      ],
      [
        'provincie' => 'Utrecht',
        'hoofdstad' => 'Utrecht',
        'bevolking'  => 1342158 ,
        'inwoners_gemeente' => 'Utrecht'       
      ],
      [
        'provincie' => 'Limburg',
        'hoofdstad' => 'Maastricht',
        'bevolking'  => 1116137 ,
        'inwoners_gemeente' => 'Maastricht'       
      ],
      [
        'provincie' => 'zeeland',
        'hoofdstad' => 'middelburg',
        'bevolking'  => 383032 ,
        'inwoners_gemeente' => 'Terneuzen'       
      ],
      [
        'provincie' => 'Flevoland',
        'hoofdstad' => 'Lelystad',
        'bevolking'  => 416546 ,
        'inwoners_gemeente' => 'Almere'       
      ]
];

foreach($provincies as $provincie ){
    echo '<h2>' . $provincie['provincie']. '</h2>';
    echo '<ul>';
    echo '<li>hoofdstad: ' . $provincie['hoofdstad']. '</li>';
    echo '<li>bevolking: ' . $provincie['bevolking']. '</li>';
    echo '<li>meeste inwoners: ' . $provincie['inwoners_gemeente']. '</li>';
    echo '</ul>';

}