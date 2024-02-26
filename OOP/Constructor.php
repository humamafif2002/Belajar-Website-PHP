<?php

class ProdukA
{

  // properti
  public  $judul,
    $penulis,
    $penerbit,
    $harga;


  // function constructor
  // adalah fungsi yang otomatis dan pertama kali dijalankan ketika kelas sudah menjadi blueprint/ di instansiasi
  // berikan nilai default pada kolom parameter
  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0 )
  {
    //jangan lupa this agar keluar dari scope dan mengubah nilai properti pada class/object
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  // function
  public function getLabel()
  {
    // Gunakan $this->nama-properti ,agar keluar dari scope yang berbeda
    return "$this->judul , $this->penerbit";
  }
}



$produk1 = new ProdukA('Naruto', 'Humam afif', 'Obisoft', 50000);
$produk2 = new ProdukA('Battlefield','Recker','EA Games',100000);
var_dump($produk1);
var_dump($produk2);
