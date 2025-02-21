<?php

$namaHewan = [
    "nama" => ["T-Rex", "Brontosaurus", "Triceratops"],
    "umur" => [500, 1100, 1450],
    "damage" => [94, 69, 80],
];

//ITERASI
foreach ($namaHewan as $key => $value) {
    foreach ($value as $val) {
        echo $val. " ";
    }
    echo $namaHewan[$key][1];
    echo "<br />";
}

// foreach ($namaHewan as $key => $value) {
//     echo $key . " : " . $value . "<br>";
// }

// var_dump($namaHewan["damage"]); 
// var_dump($namaHewan["nama"][1], $namaHewan["umur"]);


// $namaHewan = [
//     "T-Rex",
//     "Brontosaurus",
//     "Triceratops",
//     "Stegosaurus",
// ];
