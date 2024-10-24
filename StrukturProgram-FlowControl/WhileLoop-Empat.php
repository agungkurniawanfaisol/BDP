<?php
$mahasiswa = ["Andi", "Budi", "Cici", "Dedi", "Eva"];
$angkaRomawi = ["I", "II", "III", "IV", "V"];
$i = 0;

while ($i < count($mahasiswa)) {
    echo "Mahasiswa " . $angkaRomawi[$i] . ": " . $mahasiswa[$i] . "\n";
    $i++;
}
