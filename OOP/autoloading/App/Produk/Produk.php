<?php 

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
?>