<?php
$mahasiswa = ["Andi", "Budi", "Cici", "Dedi", "Eva"];
$i = 0;

while ($i < count($mahasiswa)) {
    $panjangNama = strlen($mahasiswa[$i]);
    echo "Mahasiswa ke-" . ($i + 1) . ": " . $mahasiswa[$i] . " (Panjang: $panjangNama karakter)\n";
    $i++;
}
