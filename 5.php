<?php
// buat abstract class
abstract class komputer{
   // buat abstract method
   abstract public function booting_os();

}

class notes extends komputer{
    public function booting_os()
    {
        return "Dalam file php ini adalah tentang polymorfisme,adalah konsep dimana terdapat banyak class yang memiliki signature method yang sama. Implementasi dari method-method tersebut diserahkan kepada tiap class, akan tetapi cara pemanggilan method harus sama. Agar kita dapat ‘memaksakan’ signature method yang sama pada banyak class, class tersebut harus diturunkan dari sebuah abstract class atau object interface.";
    }
}

  
class laptop extends komputer{
   public function booting_os(){
     return "Proses Booting Sistem Operasi Laptop";
   }
}
  
class pc extends komputer{
   public function booting_os(){
     return "Proses Booting Sistem Operasi PC";
   }
}
  
class chromebook extends komputer{
public function booting_os(){
     return "Proses Booting Sistem Operasi Chromebook";
   }
}
  
  
// buat objek dari class diatas
$catatan = new notes();
$laptop_baru = new laptop();
$pc_baru = new pc();
$chromebook_baru = new chromebook();  
// buat fungsi untuk memproses objek
function booting_os_komputer($objek_komputer){
   return $objek_komputer->booting_os();
}
  
// jalankan fungsi
echo booting_os_komputer($catatan);
echo "<br>";
echo booting_os_komputer($laptop_baru);
echo "<br />";
echo booting_os_komputer($pc_baru);
echo "<br />";
echo booting_os_komputer($chromebook_baru);
?>