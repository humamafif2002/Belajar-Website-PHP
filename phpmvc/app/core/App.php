<?php

class App
{

  protected $controller = 'Home',
    $method = 'index',
    $params = [];


  public function __construct()
  {
    $url = $this->parseURL();
    // var_dump($url);
    // controller
    if (isset($url)) {
      if (file_exists('../app/controllers/' . $url[0] . '.php')) {
        $this->controller = $url[0];
        unset($url[0]);
      }
    }



    require_once "../app/controllers/{$this->controller}.php";
    $this->controller = new $this->controller;
    // alamat tujuan dimulai dari file index,karna yang dijalankan adalah index.php,jadi kita harus keluar



    // Method
    if (isset($url[1])) {
      if (method_exists($this->controller, $url[1])) {
        $this->method = $url[1];
        unset($url[1]);
      } else {
        unset($url[1]);
      }
    }


    // Parameter
    if (!empty($url)) {
      $this->params = array_values($url);
    }

    // var_dump($this->controller, $this->method, $this->params);
    // jalankan controller & method ,serta kirimkan params jika ada
    call_user_func_array([$this->controller, $this->method], $this->params);
  }

  public function parseURL()
  {
    if (isset($_GET['url'])) {
      // fungsi rtrim adalah menghilangkan tanda di akhir tulisan
      $url = rtrim($_GET['url'], '/');
      // fungsi filter_var & filter _sanitize_url adalah untuk membersihkan url dari karakter aneh
      $url = filter_var($url, FILTER_SANITIZE_URL);
      // explode adalah untuk memisah dan menjadikannya sebagai array
      // delimiter adalah mana yang mau dijadikan sebagai tanda pemisah
      // karna link seperti ini maka pemisahnya adalah tanda (/) public/home/index/
      $url = explode('/', $url);
      return $url;
    }
  }
}
