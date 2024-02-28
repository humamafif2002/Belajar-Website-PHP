<?php

class Produk
{

  public
    $judul,
    $penulis,
    $penerbit,
    $harga;

  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
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

  // fungsi construcut child pertama dijalankan (ditimpa)
  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmlhalaman = 0)
  {
    // construct utama / parent dipanggil ,kemudian ,parameter dari construct child akan di input kedalam construct utama
    parent::__construct($judul, $penulis, $penerbit, $harga);
    // data parent sudah terisi kemudian isi properti child
    $this->jmlhalaman = $jmlhalaman;
  }

  public function getInfoLengkap()
  {
    // . adalah concate atau tanda penggabungan,dibawah adalah penggabungan string pada fungsi getinfoLengkap yang ada di parentnya
    // cara ketika memiliki nama fuungsi yang sama pada parentnya adalah overridding yaitu dengan cara
    // concate dan (parent::(NAMA FUNGSI YANG SAMA)) kemudian di concate lagi dengan string yang ingin di tambahkan
    return $str = "Komik : " . parent::getInfoLengkap() .  "{$this->jmlhalaman} halaman ";
  }
}
class Game extends Produk
{

  public $waktumain;

  // fungsi construcut child pertama dijalankan (ditimpa)
  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $waktumain = 0)
  {
    // construct utama / parent dipanggil ,kemudian ,parameter dari construct child akan di input kedalam construct utama
    parent::__construct($judul, $penulis, $penerbit, $harga);
    // data parent sudah terisi kemudian isi properti child
    $this->waktumain = $waktumain;
  }

  public function getInfoLengkap()
  {

    // . adalah concate atau tanda penggabungan,dibawah adalah penggabungan string pada fungsi getinfoLengkap yang ada di parentnya
    // cara ketika memiliki nama fuungsi yang sama pada parentnya adalah overridding (Fungsi Utama) yaitu dengan cara
    // concate dan (parent::(NAMA FUNGSI YANG SAMA)) kemudian di concate lagi dengan string yang ingin di tambahkan
    return $str = "Game : " . parent::getInfoLengkap() . " {$this->waktumain} jam ";
  }
}



$produk1 = new Komik('Naruto', 'Humam afif', 'Obisoft', 50000, 100);
$produk2 = new Game('BattleField', 'Recker', 'EA Games', 250000, 50);
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
