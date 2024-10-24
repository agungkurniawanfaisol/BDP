<?php

$nilai = 82;

switch ($nilai) {
    case $nilai >= 80:
        echo "Nilai anda A";
        break;
    case $nilai >= 70 && $nilai < 80:
        echo "Nilai anda B";
        break;
    case $nilai >= 60 && $nilai < 70:
        echo "Nilai anda C";
        break;
}
