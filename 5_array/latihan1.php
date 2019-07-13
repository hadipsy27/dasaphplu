<?php  
// array
// variabel yg dapat memiliki banyak nilai
// elemen pd array boloeh memiliki tipe data yg berbeda
// pasangan antara key dan value
// key-nya adalah index, yg dimulai dari 0

// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara Baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan Array
// var_dump() / print_r()

// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// Menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $hari[1];

 //menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari)












?>