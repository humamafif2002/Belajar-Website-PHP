<?php
// JIKA 1 FILE TELAH DIJADIKAN NAMESPACE,MAKA $CLASS AKAN MENGISI NAMESPACE PADA LINK ALIAS SEPERTI INI :
// xampp/htdocs/Website PHP/Belajar-Website-PHP/OOP/namespace/App/Produk/App\Produk\User.php
// karna sudah diberi namespace maka alamat file berubah
// TUGAS KITA ADALAH HANYA MENGAMBIL User di alamat terakhir saja


// untuk menggunakan namespace gunakan ini


spl_autoload_register(function ($class) {
  // $class akan berisi App\Produk\User / App\Service\User dari file index,jika tidak ada maka menjalankan semua class yang dibutuhkan oleh index
  // karna dimulai di dalam folder app maka fungsi akan mereturn folder turunannya yaitu Produk/Service
  // ini hasilnya akan seperti ini
  // App\Produk\User & App\Service\User ,maka akan kita explode
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
