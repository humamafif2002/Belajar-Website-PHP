<?php

// CATATAN SIMPLE KLIRU TAPI MEMBANTU
// JIKA 1 FILE TELAH DIJADIKAN NAMESPACE,MAKA $CLASS AKAN MENGISI NAMESPACE PADA LINK ALIAS SEPERTI INI :
// index akan mengirimkan new App\Service\User();
// App\Service\User kemudian di explode menjadi ["App","Service","user"]
// kemudian diambil array terakhir
// kemudian di require "App/Produk/User" . digabung ".php"
// spl_autoload_register berguna untuk mengatur file mana yang akan dipanggil di folder turunannya


// untuk menggunakan namespace gunakan ini


spl_autoload_register(function ($class) {

// harus gunakan 2 \,karna kalau 1 akan dianggap sebagai escape character
$class = explode('\\', $class);

// hasilnya adalah 
// $class = ["App","Produk","User"] maka akan kita ambil yang paling terakhir,yang mana pasti class
$class = end($class);
//  maka require di bawah adalah class yang terakhir yaitu "User";
  require_once __DIR__ . '/Produk/' . $class . ".php";
});

spl_autoload_register(function ($class) {
  $class = explode('\\', $class);
  $class = end($class);
  require_once __DIR__ . '/Service/' . $class . ".php";
});


// CATATAN CHATGPT YANG TEPAT
// Saat Anda menggunakan new App\Service\User();, PHP akan mencoba memuat kelas User dari namespace App\Service.
// Autoload akan dipicu karena kelas tersebut belum dimuat.
// Fungsi autoload yang telah Anda daftarkan akan dijalankan. Fungsi ini akan menerima nama kelas yang diminta sebagai argumen.
// Fungsi autoload akan mencoba menemukan lokasi file yang sesuai dengan nama kelas yang diminta, berdasarkan aturan yang Anda tetapkan dalam fungsi autoload tersebut.
// Setelah lokasi file kelas ditemukan, autoload akan memuat file tersebut ke dalam skrip PHP, sehingga kelas User menjadi tersedia untuk digunakan.

// bisa gunakan ini hasil dari penelitian saya,karna $class akan di isi namespace,dan spl autoload akan mencari nama file 
// yang mana sama dengan nama classnya

// Dengan menggunakan dirname(__DIR__), kita mendapatkan direktori induk dari direktori saat ini 
// (direktori tempat file init.php berada), yang kemudian digunakan sebagai dasar untuk memuat file kelas.
//  Hal ini harus menghilangkan duplikasi "App" yang menyebabkan masalah.
// dirname adalah fungsi yang menunjukan pusat luar suatu file,dalam kasus ini init pusatnya ada di folder app.
// maka dirnamenya adalah pusat dari folder App yaitu folder namespace

