<?php
// Mendefinisikan array pertama
$array1 = [80, 77, 65, 89, 55, 12, 90, 86];

// Mendefinisikan array kedua
$array2 = [77, 99, 55, 81, 45, 90, 91, 98];

// Menggabungkan kedua array menjadi satu menggunakan array_merge()
$mnyatukanArray = array_merge($array1, $array2);

// Menghapus nilai duplikat dari array gabungan menggunakan array_unique()
$arrraay = array_unique($mnyatukanArray);

// Mengurutkan array secara menurun (dari yang terbesar ke terkecil) menggunakan rsort()
rsort($arrraay);

// Melakukan iterasi pada setiap elemen array yang sudah diurutkan
foreach ($arrraay as $value) {
  // Menampilkan setiap elemen array diikuti dengan line break
  echo "$value <br>";
}
?>
