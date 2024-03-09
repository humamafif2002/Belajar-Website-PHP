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

// assosiative array
//  'key'=> 'value'
// $person = array(
//   "name" => "John",
//   "age" => 30,
//   "city" => "New York"
// );

// array multidimensi

// $matrix = array[
//   array[1, 2, 3],
//   array[4, 5, 6],
//   array[7, 8, 9]
// ];

// absen
// absen2