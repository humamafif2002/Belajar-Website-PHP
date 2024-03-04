<?php

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
