<?php 
$nilai =75;
// if($nilai>=60){
//     echo "<H2>Lulus</H2>";
// } elseif($nilai>=50){
//     echo"<H3>Perbaiki lagi</H3>";
// } else{
//     echo"<H4>Tidak Lulus</H4>";
// } 
  //kalo kodingan php semua boleh ga usah pake tutup php

// echo"False: ".($nilai >100)."<br>";
// echo"False: ".($nilai ==100)."<br>";
// echo"True: ".($nilai >50 && $nilai<=100)."<br>";
// echo"False: ".($nilai <=50 || $nilai>100)."<br>";

$opsi ="4";
switch ($opsi){
    case 'A':
        echo "Anda Memilih Opsi A";
    break;
    case 'B':
        echo "Anda Memilih Opsi B";
    break;
    case 'C':
        echo "Anda Memilih Opsi C";
    break;
    case 4:
        echo "Anda Memilih Opsi 4";
    break;
    default:
        echo "Anda Tidak Memilih Opsipun";
    break;
}

?> 