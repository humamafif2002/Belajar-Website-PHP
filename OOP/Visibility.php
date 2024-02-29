<?php

class Produk
{
  // jenis visibility ada 3 , yaitu adalah : public,protected,private
  public
    $judul,
    $penulis,
    $penerbit;

  protected $diskon;

  private $harga;

  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getHarga()
  {
    //jika diskon == null atau kosong
    if ($this->diskon == null) {
      // maka kembalikan nilai harga normal
      return $this->harga;
    } else {
      // namun jika diskon tidak null 
      // kembalikan harga - (harga * diskon /100);
      return $this->harga - ($this->harga * $this->diskon / 100);
    }
  }



  public function getLabel()
  {
    return "$this->penulis , $this->penerbit";
  }

  public function getInfoLengkap()
  {
    $str = "{$this->judul} | {$this->getlabel()} (Rp.{$this->harga},-)";
    return $str;
  }
}

class CetakInfoProduk
{
  public function Cetak(Produk $produk1)
  {
    $str = "{$produk1->judul} | {$produk1->getLabel()} | Rp {$produk1->harga},-";
    return $str;
  }
}

class Komik extends Produk
{

  public $jmlhalaman;

  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmlhalaman = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->jmlhalaman = $jmlhalaman;
  }

  public function getInfoLengkap()
  {
    return $str = "Komik : " . parent::getInfoLengkap() .  "{$this->jmlhalaman} halaman ";
  }

  public function setDiskon($diskon)
  {
    $this->diskon = $diskon;
  }
}
class Game extends Produk
{

  public $waktumain;


  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $waktumain = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->waktumain = $waktumain;
  }

  public function getInfoLengkap()
  {

    return $str = "Game : " . parent::getInfoLengkap() . " {$this->waktumain} jam ";
  }
}



$produk1 = new Komik('Naruto', 'Humam afif', 'Obisoft', 100000, 100);
$produk2 = new Game('BattleField', 'Recker', 'EA Games', 250000, 50);
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
echo "<hr>";
// echo $produk1->setDiskon(90);
// echo $produk1->getHarga();
// produk 2 tidak ada set diskon karna hanya ada di class komik
