<?php
$mahasiswa = ["Andi", "Budi", "Cici", "Dedi", "Eva"];
$i = 1;

while ($i < count($mahasiswa)) {
    echo "Mahasiswa ke-" . ($i + 1) . ": " . $mahasiswa[$i] . "\n";
    $i += 2; // Melompat ke indeks berikutnya
}
