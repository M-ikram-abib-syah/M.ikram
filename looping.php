<?php

// Deklarasikan variabel untuk jumlah baris dan kolom
$baris = 15;
$kolom = 5;

// Buat tabel dengan border dan cellpadding
$tabel = "<table border='1' cellpadding='3'>";

// Buat loop untuk membuat baris tabel
for ($i = 1; $i <= $baris; $i++) {

    // Buat loop untuk membuat kolom tabel
    for ($j = 1; $j <= $kolom; $j++) {

        // Tuliskan nomor kolom secara dinamis
        $tabel .= "<td>Kolom $j</td>";
    }

    // Tambahkan baris baru
    $tabel .= "</tr>";
}

// Tutup tabel
$tabel .= "</table>";

// Tampilkan output tabel
echo $tabel;

?>