<?php

class Mahasiswa extends Controller
{

  public function index()
  {
    $data['title'] = 'Data Mahasiswa';
    // cara bacanya panggil method model yang ada pada controller kemudian require model dan instansiasi,selebihnya dikerjakan oleh 
    //method pada model
    $data['Mahasiswa'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
    $this->view('templates/header', $data);
    $this->view('Mahasiswa/index', $data);
    $this->view('templates/footer', $data);
  }

  public function detail($id)
  {
    $data['title'] = 'Data Mahasiswa';
    // cara bacanya panggil method model yang ada pada controller kemudian require model dan instansiasi,selebihnya dikerjakan oleh 
    //method pada model
    $data['Mahasiswa'] = $this->model('Mahasiswa_model')->getMahasiswaByid($id);
    $this->view('templates/header', $data);
    $this->view('Mahasiswa/detail', $data);
    $this->view('templates/footer', $data);
  }

  public function tambah()
  {
    if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location:' . BASEURL . '/mahasiswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location:' . BASEURL . '/mahasiswa');
      exit;
    }
  }

  public function hapus($id)
  {
    var_dump($_POST);
    if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location:' . BASEURL . '/mahasiswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location:' . BASEURL . '/mahasiswa');
      exit;
    }
  }


  public function getubah()
  {
    // json_encode berfungsi untuk mengubah data array assosiatif menjadi json dan dimasukan menjadi data (object dalam js)
    echo json_encode($this->model('Mahasiswa_model')->getMahasiswaByid($_POST['id']));
  }

  public function ubah()
  {
    if ($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location:' . BASEURL . '/mahasiswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location:' . BASEURL . '/mahasiswa');
      exit;
    }
  }


  public function cari()
  {
    $data['title'] = 'Data Mahasiswa';
    // cara bacanya panggil method model yang ada pada controller kemudian require model dan instansiasi,selebihnya dikerjakan oleh 
    //method pada model
    $data['Mahasiswa'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
    $this->view('templates/header', $data);
    $this->view('Mahasiswa/index', $data);
    $this->view('templates/footer', $data);
  }
}
