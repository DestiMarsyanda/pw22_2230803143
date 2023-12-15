<?php

for ($angka = 1; $angka <= 25; $angka++) {
    echo "Angka $angka adalah ";

    if ($angka %2 == 0) {
        echo "bilangan genap";
    } else {
        echo "bilangan ganjil";
    }

    if ($angka %2 == 0) {
        echo " dan sekaligus bilangan prima";
    }

    echo "<br>";
}

?>