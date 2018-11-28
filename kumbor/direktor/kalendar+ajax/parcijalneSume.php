<?php


//         izracunavanje koliko ima slobodnih dana DO PRVOG ZAUZETOG u narednom mjesecu i pravljenje parcijalnih suma (od 1 do danaX, danX je svaki od slobodnih dana do prvog zauzetog)
     
     
         $nextUkupnoSlobodnih = 0;
         $parcijalneSume[1] = $nextCijena[1];
        
     
//         echo $nextPosljednjiDanUmjesecu ;
         $j=1;
         while ($nextDostupnost[$j] == 1 && $j < $nextPosljednjiDanUmjesecu ){
//             echo "$j ";  
            
            $nextUkupnoSlobodnih += $j;
    //ideja za parcijalne sume nekog dana je da na prethodnu parcijalnu sumu dodam  cijenu tog dana
             if ($j>1){
                 $parcijalneSume[$j] = $parcijalneSume[$j-1] + $nextCijena[$j];
             }
             
           $j++;
         }
//     sada imam parcijalne sume
//        echo $parcijalneSume[3];




 $parcijalneSume[0] = 0;  //ovo je zbog izrade ponude za manje od 10 sa preskokom gdje sam napravio zbrku sa brojanjem od 0 i 1
?>