<?php

class Produk
{

  // properti
  public  $judul = '',
    $penulis = '',
    $penerbit = '',
    $harga;

  // function
  public function getLabel()
  {
    // Gunakan $this->nama-properti ,agar keluar dari scope yang berbeda
    return "$this->judul , $this->penerbit";
  }
}

// (-> (nama properti) = (isi/ganti) ) digunakan untuk menimpa / mengisi property 
// yang ada pada class yang telah di instansiasi/jadi blue print;
// $produk->judul = 'Naruto';
// var_dump($produk);

$produk = new Produk();
$produk->judul = 'Naruto';
$produk->penulis = 'Humam afif';
$produk->penerbit = 'EA Games';
$produk->harga = 30000;
var_dump($produk);

// cara untuk menampilkan hasil dari properti
// echo "Game: $produk->judul , Penerbit: $produk->penerbit";
echo "<br>";


$produk2 = new Produk();
$produk2->judul = 'Uncharted';
$produk2->penulis = 'Recker';
$produk2->penerbit = 'Obisoft';
$produk2->harga = 300000;

echo "Komik :  ", $produk->getLabel();
echo '<br> <hr>';
echo "Game  :  ", $produk2->getLabel();
