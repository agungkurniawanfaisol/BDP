<?php

// Daftar nama mahasiswa
$mahasiswa = ["Andi", "Budi", "Cici", "Dedi", "Eva"];

// Penggunaan for loop untuk mencetak nama mahasiswa
for ($i = 0; $i < count($mahasiswa); $i++) {
    echo "Mahasiswa ke-" . ($i + 1) . ": " . $mahasiswa[$i] . "\n";
}
