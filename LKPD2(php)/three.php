<?php
// Mendefinisikan sebuah variabel $num dengan nilai 90
$num = 90;

// Melakukan loop dari 1 sampai dengan 30
for ($i = 1; $i <= 30; $i++) {
  
  // Mengecek apakah $num habis dibagi dengan nilai $i (artinya $i adalah faktor dari $num)
  if ($num % $i == 0) {
    
    // Jika kondisi true (habis dibagi), tampilkan hasil pembagian
    // Menampilkan dalam format "90 : i = hasil pembagian"
    echo "$num : $i = " . ($num / $i) . "<br>";
  }
}
?>
