<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan : {$hasilTambah}";
echo "<br>";
echo "Hasil Pengurangan : {$hasilKurang}";
echo "<br>";
echo "Hasil Kali : {$hasilKali}";
echo "<br>";
echo "Hasil Bagi : {$hasilBagi}";
echo "<br>";
echo "Hasil Sisa Bagi : {$sisaBagi}";
echo "<br>";
echo "Hasil Pangkat : {$pangkat}";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
echo "<br><br>";

echo "Hasil Sama : {$hasilSama}<br>";
echo "Hasil Tidak : {$hasilTidakSama}<br>";
echo "Hasil Lebih Kecil : {$hasilLebihKecil}<br>";
echo "Hasil Lebih Besar : {$hasilLebihBesar}<br>";
echo "Hasil Lebih Kecil Sama : {$hasilLebihKecilSama}<br>";
echo "Hasil Lebih Besar Sama : {$hasilLebihBesarSama}";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
echo "<br><br>";

echo "Hasil And : {$hasilAnd}<br>";
echo "Hasil Or : {$hasilOr}<br>";
echo "Hasil Not A : {$hasilNotA}<br>";
echo "Hasil Not B : {$hasilNotB}<br>";

$hasilPlus = $a += $b;
$hasilMinus =  $a -= $b;
$hasilTime = $a *= $b;
$hasilDivide = $a /= $b;
$hasilModulus = $a %= $b;
echo "<br>";

echo "Hasil Plus : {$hasilPlus}<br>";
echo "Hasil Minus : {$hasilMinus}<br>";
echo "Hasil Time : {$hasilTime}<br>";
echo "Hasil Divide : {$hasilDivide}<br>";
echo "Hasil Modulus : {$hasilModulus}<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "<br>";

echo "Hasil Identik : {$hasilIdentik}<br>";
echo "Hasil Tidak Identik : {$hasilTidakIdentik}<br>";

echo "<br>";

$total_kursi = 45;
$kursi_terisi = 28;
$kursi_kosong = $total_kursi - $kursi_terisi;
$persentase_kosong = ($kursi_kosong / $total_kursi) * 100;

echo "Persentase kursi yang masih kosong di restoran adalah: " . number_format($persentase_kosong, 2) . "%";
?>