<?php

//TROUVER les noms des personnes qui ont plus de 18 ans
//Donner les somme des age de moins de 18 ans

$personnes = [
    1 => ['name' => 'Khalid', 'age' => 25],
    2 => ['name' => 'Amel', 'age' => 4],
    3 => ['name' => 'Noam', 'age' => 1]
];

$sumAgeEnfant = 0;
$adults = '';

foreach ($personnes as $personne){
    if ($personne['age'] > 18) {
        $adults .= $personne['name'] . ', ';
    } else {
        $sumAgeEnfant += $personne['age'];
    }
}

$adults = trim($adults, ', ');

echo $adults .  (preg_match("/,/", $adults) ? ' ont ' : ' a ') . 'plus de 18 ans';
