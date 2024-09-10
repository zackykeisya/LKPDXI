<?php

// Inisialisasi variabel $numb dengan nilai 1750
$numb = 1750;

// Memanggil fungsi carikoins() untuk mendapatkan hasil dalam bentuk array
$result = carikoins($numb);

// Fungsi untuk menghitung berapa banyak koin yang dibutuhkan untuk jumlah uang tertentu
function carikoins($numb) {
    // Array yang berisi nominal koin yang tersedia (500, 200, 100)
    $koins = array(500, 200, 100);
    
    // Array untuk menyimpan hasil akhir (jumlah koin dari setiap nominal)
    $result = array();
  
    // Melakukan iterasi pada setiap nominal koin
    foreach ($koins as $koin) {
        // Inisialisasi variabel $hitung untuk menghitung jumlah koin dari nominal tertentu
        $hitung = 0;
        
        // Mengurangi $numb dengan nilai koin selama $numb lebih besar atau sama dengan nilai koin tersebut
        while ($numb >= $koin) {
            $numb -= $koin;  // Mengurangi nilai $numb dengan nominal koin
            $hitung++;  // Meningkatkan hitungan jumlah koin
        }
        
        // Jika ada koin yang dihitung, simpan hasil ke array $result
        if ($hitung > 0) {
            $result[$koin] = $hitung;  // Menyimpan jumlah koin dari nominal tersebut
        }
    }
  
    // Mengembalikan array hasil (jumlah koin dari setiap nominal)
    return $result;
}
  
// Menampilkan hasil dalam format yang rapi
echo "Jenis koins untuk Uang Rp. $numb: <br>";  // Menampilkan informasi total uang yang dipecah
foreach ($result as $koin => $jumlah) {
    // Menampilkan setiap nominal koin beserta jumlahnya
    echo "Rp.$koin: $jumlah <br>";
}
?>
