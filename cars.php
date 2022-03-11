<?php

$cars = [
    "peugeot" => [
        ["make" => "5008", "year" => 2015, "doors" => 5],
        ["make" => "3008", "year" => 2009, "doors" => 5],
        ["make" => "108", "year" => 2015, "doors" => 3],
        ["make" => "208", "year" => 2015, "doors" => 2],
        ["make" => "5008", "year" => 2020, "doors" => 5],
    ],
    "renault" => [
        ["make" => "Mégane", "year" => 2015, "doors" => 5],
        ["make" => "Scénic", "year" => 2009, "doors" => 5],
        ["make" => "Clio", "year" => 2015, "doors" => 3],
    ]
];


foreach ($cars as $mark) {
    foreach ($mark as $car)
        if($car["doors"] == 5 ) {
            echo $car["make"] . "|";
        }
}

echo "<br>";

foreach ($cars as $mark) {
    foreach ($mark as $car)
        if($car["year"] < 2010 ) {
            echo $car["make"] . "|";
        }
}

array_push($cars["peugeot"], ["make" => "2008", "year" => 2022, "doors" => 5]);

var_dump($cars);

foreach ($cars as $key => $mark) {
    if ($key == "peugeot" ){
        foreach ($mark as $key => $car){
            if($car["year"] < 2010 ) {
                unset($mark[$key]);
            }
        }
    }
}

var_dump($cars["peugeot"]);

foreach ($cars as $key1 => $car) {
    foreach ($car as $key => $brand) {
        if($brand['year'] < 2010) {
            unset($cars[$key1][$key]);
        }
    }
}
var_dump($cars);



