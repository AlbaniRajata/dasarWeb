<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar Nilai Siswa yang Lulus : " . implode(', ', $nilaiLulus);

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];
echo "<br><br>";

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar Karyawan dengan Pengalaman kerja Lebih Dari 5 Tahun : " . implode(', ', $karyawanPengalamanLimaTahun);

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

echo "<br><br>";

$matakuliah = 'Fisika';

echo "Daftar Nilai Mahasiswa dalam Mata Kuliah $matakuliah : <br>";

foreach ($daftarNilai[$matakuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

echo "<br>";

    $siswa = array(
        "Alice" => 85,
        "Bob" => 92,
        "Charlie" => 78,
        "David" => 64,
        "Eva" => 90
    );

    $rata_rata = array_sum($siswa) / count($siswa);

    echo "Daftar Nilai Siswa di atas Rata-Rata Kelas :  <br> ";
    foreach ($siswa as $nama => $nilai) {
        if ($nilai > $rata_rata) {
            echo "$nama : $nilai\n";
        }
    }
?>