<?php
// Fungsi untuk mengubah semua elemen array menjadi huruf besar dan menghapus elemen duplikat
function arrraay($Strings) {
    // array_map digunakan untuk mengubah setiap elemen menjadi huruf besar dengan strtoupper
    // array_unique digunakan untuk menghapus duplikat dari array setelah diubah menjadi huruf besar
    return array_unique(array_map('strtoupper', $Strings));
}

// Array yang berisi kombinasi string huruf besar dan huruf kecil
$Strings = array('PPLG', "HTL", "KLN", "PMN", "pplg", "htl", "kln");

// Memanggil fungsi arrraay untuk memproses array $Strings
$result = arrraay($Strings);

// Menampilkan hasil array setelah diproses
print_r($result);
?>
