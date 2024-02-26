<?php

class Mobil
{

  // Property adalah variable di dalam class/object
  public $nama,
    $merk,
    $warna,
    $kecepatan = 0,
    $kecepatanMaksimal,
    $jumlahPenumpang;

  // method adalah function didalam class/object
  public function tambahKecepatan($kecepatan)
  {
    $hasil = $kecepatan + 1;
    return $hasil;
  }


  // Visibility adalah status keadaan suatu method/property public/protected/private

}


$Mobil = new Mobil();

