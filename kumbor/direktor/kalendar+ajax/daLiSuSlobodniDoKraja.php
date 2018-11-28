<?php


  //provjeravam da li su slobodni svi dani do kraja mjeseca
         
         $daLiSuSlobodniDoKrajaMjeseca[$dan] = true;
         for ($n = $dan; $n<=$posljednjiDanUmjesecu; $n++){
   
             if ($dostupnost[$n] == 0){
                 $daLiSuSlobodniDoKrajaMjeseca[$dan] = false;
                 break;
                 }
          
             }
 //sada imam info da li su dostupni svi do kraja mjeseca


//echo "jesu li? $daLiSuSlobodniDoKrajaMjeseca[$dan] <br>";

?>