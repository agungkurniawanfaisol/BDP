<?php
$mahasiswa = ["Andi", "Budi", "Cici", "Dedi", "Eva"];
$i = 0;

do {
    echo "Mahasiswa ke-" . ($i + 1) . ": " . $mahasiswa[$i] . "\n";
    $i++;
} while ($i < count($mahasiswa));
