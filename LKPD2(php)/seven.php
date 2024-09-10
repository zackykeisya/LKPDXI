<?php
// Fungsi untuk memotong kalimat jika panjangnya lebih dari 50 karakter
function truncate_kalimat($kalimat) {
    // Mengecek apakah panjang kalimat lebih dari 50 karakter
    if (strlen($kalimat) > 50) {
        // Jika lebih dari 50, potong kalimat menjadi 50 karakter pertama dan tambahkan '...'
        return substr($kalimat, 0, 50) . "...";
    } else {
        // Jika tidak lebih dari 50, kembalikan kalimat tanpa perubahan
        return $kalimat;
    }
}

// Variabel berisi kalimat panjang yang akan diproses
$kalimat = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique consectetur labore suscipit esse quisquam quaerat accusantium Lorem ipsum dolor sit amet, consectetur adipisicin....";

// Menampilkan kalimat asli
echo "Kalimat Awal: " . $kalimat . "<br>";

// Menampilkan kalimat yang telah dipotong menggunakan fungsi truncate_kalimat()
echo "Kalimat Truncated: " . truncate_kalimat($kalimat);
?>
