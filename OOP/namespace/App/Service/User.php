<?php

namespace App\Service; //cara menjadikan suatu file menjadi namespace
// atau gunakan vendor\Namespace\Subnamespace

class User
{

  public function __construct()
  {
    echo  "ini adalah class " . __CLASS__;
  }

  public function Panggil()
  {
    return 'naon?';
  }
}
