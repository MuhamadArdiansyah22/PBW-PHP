<?php
// $array=[];
// $array =[1,2,3,4,5,6,7,8,9,10];
// $buah=['apel','mangga'];

$array=array(1,2,3,4,5,6,7,8,9,10);
$buah =array('apel','mangga');

echo $array[2] .'<br>';
echo $buah[1] .'<br>';

$buah[]='pisang';
$buah[]='anggur merah';

echo $buah[3].'<br>';

$buah[3]='Anggur Kuning'.'<br>';
echo $buah[3];

echo print_r ($buah);
?>