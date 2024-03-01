<?php

// static adalah kelas yang variable/properti dan method/function bisa dipakai tanpa di instansiasi
class ContohStatic
{
  // contoh penulisan static variable/properti
  public static $angka = 1;

  // contoh penulisan static function/method
  public static function sayHai()
  {
    // gunakan selff:: untuk menggantikan $this karna class tidak di instansiasi
    return 'Halo' . self::$angka++ . "kali";
  }
}

// gunakan Nama class kemudian :: untuk memanggil properti/method yang ada pada kelas
echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::sayHai();
echo "<br>";
echo ContohStatic::sayHai();
echo "<br>";
echo ContohStatic::sayHai();
