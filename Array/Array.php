<?php

// Array 1 dimensi 
$hari = ['Senin', 'Selasa', 'Rabu'];
var_dump($hari);


// Array 2 dimensi /multidimensi
$Mahasiswa = [
  ['Humam afif ', '15210107 ', 'Teknik Informatika'],
  ['Mutia Amanda ', '15210108 ', 'Kedokteran']
];
var_dump($Mahasiswa);


foreach ($Mahasiswa as $mhs) {
  // print sesuai indeks,jika sudah habis maka keluar ke array kedua
  for ($i = 0; $i < 3; $i++) {
    echo $mhs[$i] . " ";
  }
  echo "<br>";
}
