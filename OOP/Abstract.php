<?php

// ABSTRACT CLASS adalah class yag tidak dapat di instansiasi
// setiap kelas turunananya wajib memiliki minimal 1 method abstract

abstract class Produk
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

  // method yang wajib ada pada kelas turunannya
  abstract public function getInfoLengkap();

  public function getInfo()
  {
    $str = "{$this->judul} | {$this->getlabel()} (Rp.{$this->harga},-)";
    return $str;
  }
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


class Komik extends Produk
{

  public $jmlhalaman;

  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmlhalaman = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->jmlhalaman = $jmlhalaman;
  }
  // ia menjalankan fungsi yang wajib ada yaitu getInfoLengkap
  public function getInfoLengkap()
  {
    return $str = "Komik : " . $this->getInfo() .  "{$this->jmlhalaman} halaman ";
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

  // ia menjalankan fungsi yang wajib ada yaitu getInfoLengkap
  public function getInfoLengkap()
  {

    return $str = "Game : " . $this->getInfo() . " {$this->waktumain} jam ";
  }
}



$produk1 = new Komik('Naruto', 'Humam afif', 'Obisoft', 100000, 100);
$produk2 = new Game('BattleField', 'Recker', 'EA Games', 250000, 50);
$cetakProduk = new CetakInfoProduk;
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->Cetak();
