<?php

class Mahasiswa_model
{
  // database handler
  private $dbh,
    // statement/query
    $stmt;


  public function __construct()
  {
    // data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';
    try {
      // pdo adalah handler dbh
      // datasource name 'username','password'
      $this->dbh = new PDO($dsn, 'root', '');
    } //jika error tangkap pesannya masukan kedalam $e
    catch (PDOException $e) {
      // matikan program dan ambil pesan kesalahan
      die($e->getMessage());
    }
  }
  public function getAllMahasiswa()
  {
    // isi statement / ambil data yang mana
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    // eksekusi
    $this->stmt->execute();
    //ambil semua datanya kembalikan sebagai array associative
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
