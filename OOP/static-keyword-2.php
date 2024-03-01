<?php

class ContohStatic
{
  // disini kita akan membuat variable bersifat static,yang mana akan tetap sama
  // nilainya walaupun di instansiasi di tempat yang berbeda
  public static $angka = 1;

  public function sayHai()
  {
    return 'Halo ' . self::$angka++ . " kali";
  }
}

// contoh

$obj1 = new ContohStatic;
$obj2 = new ContohStatic;


echo $obj1->sayHai();
echo "<br>";
echo $obj1->sayHai();
echo "<br>";
echo $obj1->sayHai();

echo "<hr>";

echo $obj2->sayHai();
echo "<br>";
echo $obj2->sayHai();
echo "<br>";
echo $obj2->sayHai();

// hasilnya adalah variable/properti yang bersifat static akan meneruskan nilai yang sama setelah melewati instansiasi
// pada object lainnya
