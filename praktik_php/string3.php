<?php
    $pesan = "Saya Arek Suroboyo";
    $pesanPerKata = explode(" ", $pesan);
    $pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
    $pesan = implode(" ", $pesanPerKata);
    
    echo $pesan . "<br>";
?>