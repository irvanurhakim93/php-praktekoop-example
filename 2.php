<?php

class manusia {
//class manusia

var $nama;
var $usia;

    function __construct()
    {
        echo "ini adalah isi metode construct,metode construct adalah metode yang dijalankan pertama kali saat sebuah class dijalankan. Jadi ketika class di instansiasi maka metode ini akan berjalan otomatis..<br>";
    }

    function __destruct()
    {
        echo "ini adalah metode destruct, metode destruct adalah metode kebalikan dari construct, yakni metode yang ketika class di instansiasi,maka metode ini akan jalan belakangan..<br>";
    }

    function tampilkan_nama(){
        return "nama saya Irvan Nurhakim<br>";
    }

    function tampilkan_usia(){
        return "usia saya 29 tahun<br>";
    }

}

$manusia = new manusia();

echo $manusia->tampilkan_nama();
echo $manusia->tampilkan_usia();

?>