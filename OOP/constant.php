<?php
// cara untuk membuat const / nilai tetap

// cara pertama menggunakan define ()

// define (NAMA VARIABLE/NILAI ,'NILAI')
define('NAMA', 'Humam Afif');
// Cara menampilkannya adalah dengan memanggil NAMA NILAI/VARIABLE
echo NAMA;
echo '<br>';

// Cara kedua adalah  dengan menggunakan const 
// const NAMA NILAI = NILAI NILAI
const UMUR = 32;

echo UMUR;

// PERBEDAANNYA ADALAH KETIKA KITA MENGGUNAKAN DEFINE NILAI TIDAK DAPAT DISIMPAN KE DALAM SEBUAH CLASS ATAU MENJADI NILAI GLOBAL
// NAMUN CONST BISA DI SIMPAN DI DALAM CLASS

echo "<br>";

class Contoh {
  const Nilai = 29;
}

echo Contoh::Nilai;