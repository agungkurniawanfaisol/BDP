<?php
$mahasiswa = ["Andi", "Budi", "Cici", "Dedi", "Eva"];
$i = 0;

while ($i < 5) {
    echo "Mahasiswa ke-" . ($i + 1) . ": " . $mahasiswa[$i] . "\n";
    $i++;
}
