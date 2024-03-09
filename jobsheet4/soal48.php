<?php
  $poin = 0;
  echo"Total Skor pemain : " . $poin . "<br>";
  echo"Apakah pemain mendapatkan hadiah tambahan (IYA/TIDAK)? <br>";
  if ($poin > 500){
    echo "IYA<br>";
    echo "Selamat anda mendapatkan Hadiah Tambahan<br>";
  }  else {
    echo "TIDAK<br>";
    echo "Maaf Anda tidak mendapatkan hadiah tambahan<br>";
  }
?>