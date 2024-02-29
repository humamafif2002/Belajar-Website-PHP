<?php

class Produk
{
  private
    $judul,
    $penulis,
    $penerbit,
    $harga;

  protected $diskon;


  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  // setter atau penetapan
  public function setJudul($judul)
  {
    $this->judul = $judul;
  }

  // getter atau pengambilan
  public function getJudul()
  {
    return $this->judul;
  }

  // setter atau penetapan
  public function setPenulis($Penulis)
  {
    $this->penulis = $Penulis;
  }

  // getter atau pengambilan
  public function getPenulis()
  {
    return $this->penulis;
  }


  // setter atau penetapan
  public function setPenerbit($Penerbit)
  {
    $this->penerbit = $Penerbit;
  }

  // getter atau pengambilan
  public function getPenerbit()
  {
    return $this->penerbit;
  }

  // setter atau penetapan
  public function setHarga($Harga)
  {
    if (is_int($Harga)) {
      $this->harga = $Harga;
    } else {
      // RETURN ERROR HARGA HARUS INTEGER
      throw new Exception("HARGA HARUS INTEGER");
    }
  }

  // getter atau pengambilan 
  public function getHarga()
  {
    if ($this->diskon == null) {
      return $this->harga;
    } else {
      return $this->harga - ($this->harga * $this->diskon / 100);
    }
  }

  // getter atau pengambilan 
  public function getDetailHarga()
  {
    if ($this->diskon != null) {
      return "Harga Senilai Rp.{$this->getHarga()},- dengan potongan diskon";
    } else {
      return "Harga Senilai Rp.{$this->getHarga()},- Tidak ada potongan diskon yang berlaku";
    }
  }

  // setter atau penetapan
  public function setDiskon($diskon)
  {
    $this->diskon = $diskon;
  }

  // getter atau pengambilan
  public function getDiskon()
  {
    if ($this->diskon == null) {
      return "Tidak ada diskon di produk ini";
    } else {
      return "Diskon diberikan sebesar {$this->diskon}%";
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
echo "DATA LAMA";
echo "<br>";
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
echo "<hr>";

// SETTER
// AWAL TIDAK DIKASIH DISKON
echo $produk1->getDiskon();
echo "<br>";
// SETELAH ITU DIKASIH DISKON
$produk1->setDiskon(10);
$produk1->setJudul("Attack On Titan");
$produk1->setPenulis("Roy Kimochi");
$produk1->setPenerbit("Hirohichi");
$produk1->setHarga(200000);


// GETTER
// INFORMASI KETERSEDIAAN DISKON
echo $produk1->getDiskon();
echo "<br>";
echo $produk1->getJudul();
echo "<br>";
echo $produk1->getPenulis();
echo "<br>";
echo $produk1->getPenerbit();
echo "<br>";
echo $produk1->getHarga();
echo "<br>";
echo $produk1->getDetailHarga();

echo "<hr>";
echo "DATA TERBARU";
echo "<br>";
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
