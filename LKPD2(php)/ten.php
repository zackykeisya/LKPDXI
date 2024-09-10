<?php
function cek_jawaban($nama_pelajar, $jawaban_pelajar, $jawaban_benar) {
    $benar = 0; // Variabel untuk menyimpan jumlah jawaban yang benar
    $salah = 0; // Variabel untuk menyimpan jumlah jawaban yang salah

    // Loop untuk membandingkan setiap jawaban siswa dengan jawaban yang benar
    for ($i = 0; $i < count($jawaban_benar); $i++) {
        // Jika jawaban siswa pada indeks ke-i sama dengan jawaban benar
        if ($jawaban_pelajar[$i] == $jawaban_benar[$i]) {
            $benar++; // Tambahkan 1 ke variabel $benar
        } else {
            $salah++; // Jika salah, tambahkan 1 ke variabel $salah
        }
    }

    // Menampilkan nama pelajar, jumlah jawaban benar, dan jumlah jawaban salah
    echo "Nama : $nama_pelajar <br>";
    echo "Jumlah Jawaban Benar : $benar <br>";
    echo "Jumlah Jawaban Salah : $salah";
}

// Inisialisasi array jawaban yang benar
$jawaban_benar = ['A', 'D', 'C', 'C', 'B', 'A', 'E', 'B', 'A', 'E'];
// Inisialisasi nama pelajar
$nama_pelajar = 'Putra';
// Inisialisasi array jawaban pelajar
$jawaban_pelajar = ['B', 'D', 'C', 'C', 'B', 'A', 'E', 'B', 'C', 'E'];

// Memanggil fungsi cek_jawaban dengan parameter nama pelajar, jawaban pelajar, dan jawaban benar
cek_jawaban($nama_pelajar, $jawaban_pelajar, $jawaban_benar);
?>
