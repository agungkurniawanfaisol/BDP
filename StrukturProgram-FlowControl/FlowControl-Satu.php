<?php

$nilai = 50;

if ($nilai >= 80) {
    echo "Nilai anda A";
} else if ($nilai >= 70 && $nilai < 80) {
    echo "Nilai anda B";
} else if ($nilai >= 60 && $nilai < 70) {
    echo "Nilai anda C";
} else {
    echo "Nilai Anda D";
}
