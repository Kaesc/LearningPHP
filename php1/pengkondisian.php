<?php

$namaHewan = "T-Rex";
$level = 5;

// if ($level <= 5) {
//     echo $namaHewan . " tidak bisa bertarung.";
// } elseif ($level > 5) {
//     echo $namaHewan . " bisa bertarung.";
// }

switch ($level) {
    case 5:
        echo $namaHewan . " tidak bisa bertarung.";
        break;

    case 6:
        echo $namaHewan . " bisa bertarung.";
        break;
    
    default:
        echo $namaHewan . " tidak ada dalam pertarungan.";
        break;
}