<?php

class About extends Controller
{

  public function index()
  {
    $data['title'] = 'About';
    $data['admin'] = 'admin';
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer', $data);
  }
}
