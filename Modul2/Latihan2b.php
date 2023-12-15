<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modul 2 - Latihan 1</title>
  <style>
    .kotak {
      display: inline-block;
      width: 30px;
      height: 30px;
      border: 1px solid black;
      text-align: center;
      margin: 5px;
    }a
    .clear {
      clear: both;
    }
  </style>
</head>
<body>

<?php
// Menentukan jumlah baris dan kolom
$jumlahBaris = 5;
$jumlahKolom = $jumlahBaris;

// Memulai loop untuk setiap baris
for ($baris = 1; $baris <= $jumlahBaris; $baris++) {
    // Memulai loop untuk setiap kolom dalam baris
    for ($kolom = 1; $kolom <= $baris; $kolom++) {
        // Menampilkan nomor kolom secara dinamis dalam div dengan kelas "kotak"
        echo "<div class='kotak'>$kolom </div>";
    }

    // Menambahkan clear untuk memastikan baris-baris berada di bawah satu sama lain
    echo "<div class='clear'></div>";
}

?>
</body>
</html>