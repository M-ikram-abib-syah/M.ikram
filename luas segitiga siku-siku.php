<?php
function hitungLuasSegitigaSiku($alas, $tinggi) {
 // Rumus luas segitiga siku-siku
 $luas = 0.5 * $alas * $tinggi;

    return $luas;
}

// Contoh penggunaan fungsi dengan alas = 6 dan tinggi = 12
$alas = 6;
$tinggi = 12;
$luasSegitiga = hitungLuasSegitigaSiku($alas, $tinggi);

// Menampilkan hasil
    echo "Alas segitiga: {$alas} CM<br>";
    echo "Tinggi segitiga: {$tinggi} CM<br>";
    echo "Luas segitiga siku-siku: {$luasSegitiga} CM²";
?>

