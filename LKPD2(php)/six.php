<?php
// Array asosiatif yang berisi daftar barang, harga, dan jumlah barang
$barang = [
    [
        'nama_barang' => 'Pasta gigi',     // Nama barang pertama
        'harga_barang' => 18000,           // Harga barang pertama
        'jumlah_barang' => 1,              // Jumlah barang pertama
    ],
    [
        'nama_barang' => 'Sabun Mandi',    // Nama barang kedua
        'harga_barang' => 5000,            // Harga barang kedua
        'jumlah_barang' => 3,              // Jumlah barang kedua
    ],
    [
        'nama_barang' => 'Shampoo',        // Nama barang ketiga
        'harga_barang' => 15000,           // Harga barang ketiga
        'jumlah_barang' => 4,              // Jumlah barang ketiga
    ],
];

// Variabel untuk menyimpan total harga keseluruhan
$total_harga = 0;

echo "Daftar belanjaan:<br>";  // Menampilkan teks 'Daftar belanjaan' sebagai heading

// Loop untuk menampilkan setiap barang dalam daftar belanjaan
foreach ($barang as $index => $item) {
    // Menghitung subtotal untuk setiap barang (harga per barang x jumlah barang)
    $sub_total = $item['harga_barang'] * $item['jumlah_barang'];
    
    // Menambahkan subtotal ke total harga keseluruhan
    $total_harga += $sub_total;
    
    // Menampilkan nama barang, jumlah barang, dan subtotal dengan format rupiah
    echo ($index + 1) . ". " . $item['nama_barang'] . "(" . $item['jumlah_barang'] . ") : " . number_format($sub_total, 0, ',', '.') . "<br>";
}

echo "<br>Total harga yang harus dibayar: Rp " . number_format($total_harga, 0, ',', '.') . "<br>";  // Menampilkan total harga keseluruhan dengan format rupiah
?>
