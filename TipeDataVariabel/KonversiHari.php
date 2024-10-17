<?php
$Pertahun = 365;
$Minggu = 7;
$Bulan = 12;
$Hari = 7;

$HitungHari = readline("Masukkan Jumlah Hari : ");

$KonversiTahun = $HitungHari / $Pertahun;
$tmpKonversiBulan = $HitungHari / $Bulan;
$KonversiBulan = $Hari / $tmpKonversiBulan;

$KonversiMinggu = $KonversiBulan / $Hari;
$minggu = $HitungHari / 7;

echo "Hasil Konversi : " . round($KonversiTahun, 2) . " Tahun";
echo "Hasil Konversi Bulan : " . round($KonversiBulan, 2) . " Bulan";
echo "Hasil Konversi Minggu : " . round($minggu, 2) . " Minggu";
