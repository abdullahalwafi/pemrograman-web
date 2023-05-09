@php

$nilai = 100;

if ($nilai >= 90) {
    echo "Nilai anda A, Lulus!";
} elseif ($nilai >= 80) {
    echo "Nilai anda B, Lulus!";
} elseif ($nilai >= 70) {
    echo "Nilai anda C, Lulus!";
} elseif ($nilai >= 60) {
    echo "Nilai anda D, Gagal!";
} else {
    echo "Nilai anda E, Gagal!";
}

@endphp
