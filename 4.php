<?php 

//dalam file ini,akan dibuat class inheritance / pewarisan,dimana dapat mengakses property atau method antar class

class manusia {

    //property
    public $namasaya;

    //method
    function berinama($saya){
        $this->namasaya=$saya;
    }
}

//sub class atau class turunan dari class manusia
//untuk menghubungkan class menggunakan syntax extends
class teman extends manusia{

    //property
    public $namateman;

    //method
    function berinamateman($teman){
        $this->namateman=$teman;
    }
}

//instansiasi class teman
$tutorialoop = new teman;
$tutorialoop->berinama("Irvan");
$tutorialoop->berinamateman("Arjuna");

//menampilkan isi property
echo "Nama saya : " . $tutorialoop->namasaya . "<br>";
echo "Nama teman saya : " . $tutorialoop->namateman;


?>