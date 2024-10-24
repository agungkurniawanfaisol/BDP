<?php
$mahasiswa = ["Andi", "Budi", "Cici", "Dedi", "Eva"];

for ($i = 0; $i < count($mahasiswa); $i++) {
    echo "Mahasiswa ke-" . ($i + 1) . ": " . $mahasiswa[$i] . "\n";
}
