<?php
    function perkenalan($nama, $salam="Assalamualaikum"){
        echo $salam.", ";
        echo "Perkenalkan Nama Saya ".$nama. "<br/> ";
        echo "Senang Berkenalan Dengan Anda<br/> ";
    }

    perkenalan("Albani","Hallo");
    echo "<hr>";

    $saya = "Rajata";
    $ucapanSalam = "Selamat Pagi";


    perkenalan($saya);
?>