<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai Huruf : A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik <= 90) {
    echo "Nilai Huruf : B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik <= 80) {
    echo "Nilai Huruf : C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai Huruf : A";   
}     

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;
echo "<br><br>";

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;
echo "<br><br>";

for ($i = 1; $i <=$jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah Buah Yang Akan dipanen Adalah : $jumlahBuah";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;
echo "<br><br>";

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total Skor Ujian Adalah : $totalSkor";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
echo "<br><br>";

foreach ($nilaiSiswa as $nilai) {
    if($nilai < 60) {
        echo "Nilai : $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai : $nilai (Lulus) <br>";
}

//soal 4.6
$daftarNilai = [85,92,78,90,75,88,79,70];
$totalNilai = 0;
echo "<br>";
foreach($daftarNilai as $nilai){
    $totalNilai += $nilai / 8;
}

echo "Daftar Nilai : 85,92,78,64,90,75,88,79,70,96 <br>";
echo "Rata-Rata Nilai Setelah Mengabaikan Nilai Tertinggi dan Terendah : $totalNilai<br>";

//soal 4.7
$harga_produk = 120000;
$diskon = 0.20;
echo "<br><br>";

if ($harga_produk > 100000) {
    $harga_setelah_diskon = $harga_produk - ($harga_produk * $diskon);
} else {
    $harga_setelah_diskon = $harga_produk;
}

echo "Harga yang harus dibayar setelah mendapatkan diskon : Rp " . ($harga_setelah_diskon);

//soal 4.8
$skor_pemain = 600;
$total_skor = "Total skor pemain adalah: " . $skor_pemain;
$hadiah_tambahan = ($skor_pemain > 500) ? "YA" : "TIDAK";
echo "<br><br>";

echo "$total_skor<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah_tambahan";
?>