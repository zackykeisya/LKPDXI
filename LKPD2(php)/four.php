<?php
// Loop pertama ($i) berjalan 2 kali (dari 0 sampai kurang dari 2)
for ($i = 0; $i < 2; $i++) {

  // Loop kedua ($j) berjalan 4 kali (dari 0 sampai kurang dari 4)
  for ($j = 0; $j < 4; $j++) {

    // Menampilkan 8 bintang (*) di setiap baris menggunakan str_repeat
    // str_repeat('*', 8) menghasilkan string berisi 8 bintang
    echo str_repeat('*', 8) . "<br>"; // "<br>" untuk pindah baris
  }

  // Setelah loop dalam ($j) selesai, tampilkan baris kosong sebagai pemisah antar grup
  echo "<br>";
}
?>
