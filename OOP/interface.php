<?php

// interface adalah class berupa template
// interface tidak boleh ada properti,dan hanya template method saja
// wajib visibilitynya public
// contoh interface
interface getInfoLengkap
{
  public function getInfoLengkap();
}


abstract class Produk
{
  protected
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

  // method yang wajib ada pada kelas turunannya
  abstract public function getInfo();
}

// cetak info produk di ubah agar mencetak banyak produk sekaligus
class CetakInfoProduk
{
  // buat array
  public $daftarProduk = [];

  // tambah Produk tadi
  public function tambahProduk(Produk $produk)
  {
    $this->daftarProduk[] = $produk;
  }


  public function Cetak()
  {
    $str = "DAFTAR PRODUK : <br>";

    foreach ($this->daftarProduk as $p) {
      $str .= " - {$p->getInfoLengkap()} <br>";
    }

    return $str;
  }
}


// tinggal buat implements nama interfacenya
class Komik extends Produk implements getInfoLengkap
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





// tinggal buat implements nama interfacenya
class Game extends Produk
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



$produk1 = new Komik('Naruto', 'Humam afif', 'Obisoft', 100000, 100);
$produk2 = new Game('BattleField', 'Recker', 'EA Games', 250000, 50);
$cetakProduk = new CetakInfoProduk;
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->Cetak();
