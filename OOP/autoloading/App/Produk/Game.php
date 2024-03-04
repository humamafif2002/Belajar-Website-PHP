<?php 

// tinggal buat implements nama interfacenya
class Game extends Produk implements GetInfoLengkap
{

  public $waktumain;


  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $waktumain = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->waktumain = $waktumain;
  }

  // ini membuat fungsi interfacenya yaitu getInfoLengkap()
  public function getInfoLengkap()
  {

    return $str = "Game : " . $this->getInfo() . " {$this->waktumain} jam ";
  }

  public function getInfo()
  {
    $str = "{$this->judul} | {$this->getlabel()} (Rp.{$this->harga},-)";
    return $str;
  }
}

?>