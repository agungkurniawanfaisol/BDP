<?php
$mahasiswa = ["Andi", "Budi", "Cici", "Dedi", "Eva"];
$i = 1;

do {
    echo "Mahasiswa ke-" . ($i + 1) . ": " . $mahasiswa[$i] . "\n";
    $i += 2; // Melompat ke indeks berikutnya
} while ($i < count($mahasiswa));
