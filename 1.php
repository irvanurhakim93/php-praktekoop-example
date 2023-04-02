<?php

class manusia{
  //sebuah class
  
  var $nama;
  var $warna;
  //sebuah property

  function tampilkan_nama()
  {
    return "nama saya irvan nurhakim<br>";
  }

  function tampilkan_usia(){
    return "usia saya 29 tahun";
  }

}

//instansiasi class manusia
$manusia = new manusia();

echo $manusia->tampilkan_nama();
echo $manusia->tampilkan_usia();


?>