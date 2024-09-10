<?php
// Mengatur zona waktu ke Asia/Jakarta
date_default_timezone_set('Asia/Jakarta'); 

// Mendapatkan nama hari ini dalam format teks (misalnya, "Tuesday")
$hariIni = date('l'); 

// Nilai total pembelian
$totalBeli = 130000; 

// Fungsi untuk menghitung diskon berdasarkan hari dan jumlah pembelian
function calculatediskon($totalBeli, $hariIni) {
  // Variabel diskon awal diatur ke 0
  $diskon = 0;
  
  // Jika hari ini adalah hari Selasa (Tuesday), maka diskon 5%
  if ($hariIni == 'Tuesday') {
    $diskon = 0.05; 
  }
  
  // Jika total pembelian lebih dari 100.000, diskon 7%
  if ($totalBeli > 100000) {
    // Memastikan diskon yang lebih tinggi yang diterapkan, antara diskon Selasa dan diskon total pembelian
    $diskon = max($diskon, 0.07); 
  }
  
  // Mengembalikan nilai diskon
  return $diskon;
}

// Fungsi untuk menghitung total pembelian setelah diskon
function calculateTotalpembelian($totalBeli, $diskon) {
  // Menghitung total pembelian dengan mengurangi diskon dari total pembelian awal
  return $totalBeli - ($totalBeli * $diskon);
}

// Memanggil fungsi untuk mendapatkan nilai diskon berdasarkan total pembelian dan hari ini
$diskon = calculatediskon($totalBeli, $hariIni);

// Menghitung total pembelian setelah diskon
$totalpembelian = calculateTotalpembelian($totalBeli, $diskon);
?>

<html>
  <head>
    <title>Total Pembayaran</title>
  </head>
  <body>
    <h1>Total Pembayaran</h1>
    
    <!-- Menampilkan hari ini -->
    <p>Hari ini hari: <?php echo $hariIni; ?></p>

    <!-- Menampilkan total pembelanjaan awal dalam format Rupiah -->
    <p>Total pembelanjaan : Rp. <?php echo number_format($totalBeli, 0, ',', '.'); ?></p>

    <!-- Menampilkan total yang harus dibayar setelah diskon, dalam format Rupiah -->
    <p>Total yang harus dibayar : Rp. <?php echo number_format($totalpembelian, 0, ',', '.'); ?></p>
  </body>
</html>
