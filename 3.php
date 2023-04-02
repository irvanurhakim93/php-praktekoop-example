<?php

class manusia{
    public $nama;
    public $usia;

    function __construct()
    {
        echo "di class / file php ini, ini menggunakan enkapsulasi,yakni menggunakan private,public,atau protected<br>";
    }

    function word(){
        return "dimana variabel nama dan usia dienkapsulasi dalam bentuk public<br>";
    }

    function tampilkan_nama(){
        return "Nama saya Irvan Nurhakim<br>";
    }

    function tampilkan_usia(){
        return "Usia saya 29 tahun";
    }

}

$manusia = new manusia();

echo $manusia->word();
echo $manusia->tampilkan_nama();
echo $manusia->tampilkan_usia();
?>