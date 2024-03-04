<?php 

class Komik extends Produk implements GetInfoLengkap
{

  public $jmlhalaman;

  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmlhalaman = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->jmlhalaman = $jmlhalaman;
  }
  // ini membuat fungsi interfacenya yaitu getInfoLengkap()
  public function getInfoLengkap()
  {
    return $str = "Komik : " . $this->getInfo() .  "{$this->jmlhalaman} halaman ";
  }

  public function getInfo()
  {
    $str = "{$this->judul} | {$this->getlabel()} (Rp.{$this->harga},-)";
    return $str;
  }
}
?>