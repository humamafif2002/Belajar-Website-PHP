<?php

// file ini hanya merequire 1 file init,yaitu yang akan mengkoneksikan file" lain ke file ini
require_once "App/init.php";

$produk1 = new Komik('Naruto', 'Humam afif', 'Obisoft', 100000, 100);
$produk2 = new Game('BattleField', 'Recker', 'EA Games', 250000, 50);
$cetakProduk = new CetakInfoProduk;
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->Cetak();
