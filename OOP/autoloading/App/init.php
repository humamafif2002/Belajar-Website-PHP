<?php

// spl autoload register adalah fungsi yang akan mendaftarkan  semua class yang ada pada
//  folder tujuan ke file yang terkoneksi ke file init
spl_autoload_register(function ($class) {
// semua nama file yang ada pada folder produk akan di gabungkan dengan ekstensi php,dan akan dipanggil untuk file yang
// meminta pada file init
require_once 'Produk/' .$class.".php";
});


// atau bisa juga seperti ini biar complex menggunakan magic method
// spl_autoload_register(function ($class) {
//   require_once __DIR__.'/Produk/' .$class.".php";
//   });