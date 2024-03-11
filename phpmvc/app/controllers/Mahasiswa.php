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
}
