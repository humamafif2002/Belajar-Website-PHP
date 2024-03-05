<?php

// file ini hanya merequire 1 file init,yaitu yang akan mengkoneksikan file" lain ke file ini
require_once "App/init.php";


//  cara memanggil namespace menggunakan lokasi namespace yang telah dibuat
// new App\Service\User();


// atau dijadikan alias kemudian instansiasi menggunakan as(aliasnya)
use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

echo "<br>";
// ini adalah contoh menginstansiasi namespace menggunakan nama aliasnya
new ProdukUser();
echo "<br>";
$Battlefield = new Game("Battlefield", "Recker", "EA GAMES", 100000, 50);
echo $Battlefield->getInfoLengkap();
