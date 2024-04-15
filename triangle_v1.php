<?php
$alas = 4.5;
$tinggi = 6.0;

//menghitung luas segitiga
$luas = 0.5 * $alas * $tinggi;

//Menghitung sisi miring dengan teorema Pytagoras
$sisiMiring = sqrt(pow($alas, 2) + pow($tinggi, 2));

//menghitung keliling segitiga
$keliling = $alas + $tinggi + $sisiMiring;

//Memformat angka menjadi dua desimal
$luas_formatted = number_format((float)$luas, 2, ',' , ',');
$keliling_formatted = number_format ((float)$keliling, 2, ',' , '.');

//menampilkan hasil
echo '<p>Alas: ' . $alas . '</p>';
echo '<p>Tinggi: ' . $tinggi . '</p>';
echo '<p>Luas: ' . $luas_formatted . '</p>' ;
echo '<p>Keliling: ' . $keliling_formatted . '</p>';
?>