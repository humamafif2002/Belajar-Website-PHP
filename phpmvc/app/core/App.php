<?php

class App
{

  public function __construct()
  {
    $url = $this->parseURL();
    var_dump($url);
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
