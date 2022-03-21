<?php    
//OVERRIDING
//membuat class abstract Animal dengan public function makanan, bergerak, cara berkembang biak dan tempat tinggal
 abstract class Animal {  
      abstract public function Makanan();  
      abstract public function Bergerak();  
      abstract public function KembangBiak(); 
      abstract public function TempatTinggal(); 
 }  

 //membuat class Anjing extends Animal
 class Anjing extends Animal {  
      public function Makanan() {  
           return "Anjing makan daging, tulang dan beberapa macam sayuran\n";  
      }  
             
      public function Bergerak() {  
           return "Anjing bergerak dengan berjalan dan melompat\n";  
      }  
        
      public function KembangBiak() {  
           return "Anjing berkembang biak dengan cara melahirkan (vivipar)\n";  
      }  

      public function TempatTinggal() {
          return "Anjing tinggal di darat\n";
      }
 }  
   
 //membuat class Lumba extends Animal
 class Lumba extends Animal {  
    public function Makanan() {  
         return "Lumba - lumba makan ikan\n";  
    }  
           
    public function Bergerak() {  
         return "Lumba - lumba bergerak dengan berenang\n";  
    }  
      
    public function KembangBiak() {  
         return "Lumba - lumba berkembang biak dengan cara melahirkan (vivipar)\n";  
    }  

    public function TempatTinggal() {
        return "Anjing tinggal di air (laut)\n";
    }
}  

//membuat class Burung extends Animal
class Burung extends Animal {  
    public function Makanan() {  
         return "Burung makan biji - bijian\n";  
    }  
           
    public function Bergerak() {  
         return "Burung bergerak dengan terbang\n";  
    }  
      
    public function KembangBiak() {  
         return "Burung berkembang biak dengan cara beranak\n";  
    }  

    public function TempatTinggal() {
        return "Burung tinggal di udara\n";
    }
}  

//membuat class Ikan extends Animal
class Ikan extends Animal {  
    public function Makanan() {  
         return "Ikan makan pelet ikan\n";  
    }  
           
    public function Bergerak() {  
         return "Ikan bergerak dengan berenang\n";  
    }  
      
    public function KembangBiak() {  
         return "Ikan berkembang biak dengan cara bertelur\n";  
    }  

    public function TempatTinggal() {
        return "Ikan tinggal di air\n";
    }
}  
   
//membuat objek dari class di atas
 $Anjing = new Anjing;  
 $Lumba = new Lumba;  
 $Burung = new Burung;
 $Ikan = new Ikan;

 //menjalankan fungsi menampilkan output menggunakan echo
 echo "Hello! Berikut adalah informasi seputar hewan!\n";
 echo "\nPerilaku Anjing\t : \n";  
 echo $Anjing->Makanan();  
 echo $Anjing->Bergerak();  
 echo $Anjing->KembangBiak();  
 echo $Anjing->TempatTinggal();
     
 echo "\nPerilaku Lumba\t : \n";  
 echo $Lumba->Makanan();  
 echo $Lumba->Bergerak();  
 echo $Lumba->KembangBiak();  
 echo $Lumba->TempatTinggal();

 echo "\nPerilaku Burung\t : \n";  
 echo $Burung->Makanan();  
 echo $Burung->Bergerak();  
 echo $Burung->KembangBiak();  
 echo $Burung->TempatTinggal();

 echo "\nPerilaku Ikan \t: \n";  
 echo $Ikan->Makanan();  
 echo $Ikan->Bergerak();  
 echo $Ikan->KembangBiak();  
 echo $Ikan->TempatTinggal();
 ?>    