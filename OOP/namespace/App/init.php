<?php

// untuk menggunakan namespace gunakan ini


spl_autoload_register(function ($class) {
  // ini hasilnya akan seperti ini
  // App\Produk\User ,maka akan kita explode
  // harus gunakan 2 \,karna kalau 1 akan dianggap sebagai escape character
  $class = explode('\\', $class);
  // hasilnya adalah 
  // $class = ["App","Produk","User"] maka akan kita ambil yang paling terakhir,yang mana pasti class
  $class = end($class);
//  maka require di bawah adalah class yang terakhir yaitu "User";
  require_once __DIR__ . '/Produk/' . $class . ".php";
});

spl_autoload_register(function ($class) {
  // ini hasilnya akan seperti ini
  // App\Produk\User ,maka akan kita explode
  // harus gunakan 2 \,karna kalau 1 akan dianggap sebagai escape character
  $class = explode('\\', $class);
  // hasilnya adalah 
  // $class = ["App","Produk","User"] maka akan kita ambil yang paling terakhir,yang mana pasti class
  $class = end($class);
//  maka require di bawah adalah class yang terakhir yaitu "User";
  require_once __DIR__ . '/Service/' . $class . ".php";
});
