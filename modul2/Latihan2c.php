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
    }

    .clear {
      clear: both;
    }

    .ganjil {
      background-color: #003;
      color: #fff;
    }

    .genap {
      background-color: #999;
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
        // Menambahkan kelas "ganjil" atau "genap" berdasarkan nomor baris
        $kelas = ($baris % 2 == 0) ? 'genap' : 'ganjil';

        // Menampilkan nomor kolom dalam div dengan kelas "kotak" dan kelas dinamis
        echo "<div class='kotak $kelas'>$kolom</div>";
    }

    // Menambahkan clear untuk memastikan baris-baris berada di bawah satu sama lain
    echo "<div class='clear'></div>";
}

?>
</body>
</html>