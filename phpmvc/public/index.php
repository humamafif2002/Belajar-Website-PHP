<?php
// jika tidak ada else / else if ,kurung kurawal boleh di hapus
if (!session_id()) session_start();

// ini adalah proses bootstraping 
// yang mana merequire 1 file yang akan memanggil banyak file
require_once '../app/init.php';


$app = new App;
