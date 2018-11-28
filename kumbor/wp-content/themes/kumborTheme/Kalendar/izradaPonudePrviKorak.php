<?php

 //sada treba izraditi ponudu za 10 i 21 dan
//    ovo je ponuda za datume kod kojih su svi dani (ukljuceni u arazman) iz  istog mjeseca



   $m = $dan;

     while ($m<=$posljednjiDanUmjesecu && $dostupnost[$m] == 1){
//         echo " $m : $dostupnost[$m]: $cijena[$m] <br>";
         
         $cijenaAranzmana += $cijena[$m];
//gledacu da li je razlika 9 jer brojanje pocinje od 0:
         if ($m - $dan == 9){
             $ponudaZa10[$dan] = $cijenaAranzmana;
         }
          if ($m - $dan == 20){
             $ponudaZa21[$dan] = $cijenaAranzmana;
         }
         $m++;
     }
























?>