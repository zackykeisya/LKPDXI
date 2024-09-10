<?php
// Variabel teks1 berisi kalimat dengan karakter spesial
$teks1 = "Selamat ulang tahun yang ke-17!";

// Variabel teks2 berisi kalimat tanpa karakter spesial
$teks2 = "Selamat ulang tahun";

// Fungsi untuk mengecek apakah terdapat karakter spesial dalam teks
function cekpecial($teks) {
  // Array berisi daftar karakter spesial yang ingin dicek
  $pecial = array('!', '*', '$', '-', ',', '.','/','[',']','"',"'",);

  // Array untuk menyimpan karakter spesial yang ditemukan
  $mencariPecial = array();

  // Loop melalui setiap karakter spesial
  foreach ($pecial as $char) {
    // Jika karakter spesial ditemukan dalam teks, tambahkan ke array $mencariPecial
    if (strpos($teks, $char) !== false) {
      $mencariPecial[] = $char;
    }
  }

  // Jika karakter spesial ditemukan, tampilkan karakter-karakter tersebut
  if (count($mencariPecial) > 0) {
    return "Karakter yang terdapat pada kalimat : " . implode(', ', $mencariPecial);
  } else {
    // Jika tidak ada karakter spesial, tampilkan pesan tidak ada simbol
    return "Tidak terdapat simbol pada kalimat.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1>cek Special Characters</h1>

    <!-- Menampilkan teks1 -->
    <p>teks 1: <?= $teks1 ?></p>
    <!-- Menampilkan hasil cek karakter spesial dari teks1 -->
    <p><?= cekpecial($teks1) ?></p>

    <!-- Menampilkan teks2 -->
    <p>teks 2: <?= $teks2 ?></p>
    <!-- Menampilkan hasil cek karakter spesial dari teks2 -->
    <p><?= cekpecial($teks2) ?></p>
  </body>
</html>
