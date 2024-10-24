<?php
$mahasiswa = ["Andi", "Budi", "Cici", "Dedi", "Eva"];
$angkaRomawi = ["I", "II", "III", "IV", "V"];

for ($i = 0; $i < count($mahasiswa); $i++) {
    echo "Mahasiswa " . $angkaRomawi[$i] . ": " . $mahasiswa[$i] . "\n";
}
