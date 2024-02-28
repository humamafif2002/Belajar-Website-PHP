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
  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0)
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
    return "$this->penulis , $this->penerbit";
  }
}

// class CetakInfoProduk memiliki fungsi yang mana akan mengeksekusi object lainnya yaitu fungsi Cetak()
class CetakInfoProduk
{
  // ProdukA pada parameter adalah spesifik agar parameter hanya menerima parameter yang
  // hasil dari Instansiasi class ProdukA (Object dari ProdukA)
  public function Cetak(ProdukA $produk1)
  {
    $str = "{$produk1->judul} | {$produk1->getLabel()} | Rp {$produk1->harga},-";
    return $str;
  }
}



$produk1 = new ProdukA('Naruto', 'Humam afif', 'Obisoft', 50000);
$hasilProduk = new CetakInfoProduk();
echo $hasilProduk->Cetak($produk1);

// $produk2 = new ProdukA('Battlefield','Recker','EA Games',100000);
// var_dump($produk1);
// var_dump($produk2);
