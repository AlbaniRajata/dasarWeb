<?php
    function hitungUmur($thn_lahir, $thn_sekarang) {
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }
    function perkenalan ($nama, $salam="Assalamualaikum") {
        echo $salam. ",";
        echo "Perkenalkan, Nama Saya ".$nama."<br/>";

        echo "Saya Berusia ". hitungUmur(2004, 2023) . " tahun<br/>";
        echo "Senang Berkenalan Dengan Anda<br/>";
    }

    perkenalan("Albani");
?>