<?php

class Produk
{

  // properti
  public  $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlhalaman,
    $waktumain;


  // function constructor
  // adalah fungsi yang otomatis dan pertama kali dijalankan ketika kelas sudah menjadi blueprint/ di instansiasi
  // berikan nilai default pada kolom parameter
  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmlhalaman = 0, $waktumain = 0)
  {
    //jangan lupa this agar keluar dari scope dan mengubah nilai properti pada class/object
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlhalaman = $jmlhalaman;
    $this->waktumain = $waktumain;
  }

  // function
  public function getLabel()
  {
    // Gunakan $this->nama-properti ,agar keluar dari scope yang berbeda
    return "$this->penulis , $this->penerbit";
  }

  public function getInfoLengkap()
  {
    // komik : Naruto | Penulis , Penerbit (Rp.30000) - 100 halaman
    if ($this->jmlhalaman != 0) {
      $str = "Komik : {$this->judul} | {$this->getlabel()} (Rp.{$this->harga},-) - {$this->jmlhalaman} halaman ";
    } else if ($this->waktumain != 0) {
      $str = "Game : {$this->judul} | {$this->getlabel()} (Rp.{$this->harga},-) ~ {$this->waktumain} jam ";
    }
    return $str;
  }
}

// class CetakInfoProduk memiliki fungsi yang mana akan mengeksekusi object lainnya yaitu fungsi Cetak()
class CetakInfoProduk
{
  // ProdukA pada parameter adalah spesifik agar parameter hanya menerima parameter yang
  // hasil dari Instansiasi class ProdukA (Object dari ProdukA)
  public function Cetak(Produk $produk1)
  {
    $str = "{$produk1->judul} | {$produk1->getLabel()} | Rp {$produk1->harga},-";
    return $str;
  }
}

class Komik extends Produk {

  public function getInfo()
  {
    return $str = "Komik : {$this->judul} | {$this->getlabel()} (Rp.{$this->harga},-) - {$this->jmlhalaman} halaman ";
  }

}
class Game extends Produk {

  public function getInfo()
  {
    return $str = "Game : {$this->judul} | {$this->getlabel()} (Rp.{$this->harga},-) ~ {$this->waktumain} jam ";
  }

}



$produk1 = new Komik('Naruto', 'Humam afif', 'Obisoft', 50000, 100, 0);
$produk2 = new Game('BattleField', 'Recker', 'EA Games', 250000, 0, 50);
echo $produk1->getInfo();
echo "<br>";
echo $produk2->getInfo();


// $produk2 = new ProdukA('Battlefield','Recker','EA Games',100000);
// var_dump($produk1);
// var_dump($produk2);
// $hasilProduk = new CetakInfoProduk();
// echo $hasilProduk->Cetak($produk1);  