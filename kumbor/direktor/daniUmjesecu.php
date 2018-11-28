 <?php

            $posljednjiDanUmjesecu = 31; //ovo je default, mjenjam za dane sa 30 dana i za februar
 
               if ($mjesec == 4 || $mjesec == 6 || $mjesec == 9 || $mjesec == 11) {  
    $posljednjiDanUmjesecu = 30;
 }
            
             if ($mjesec == 2){
                $posljednjiDanUmjesecu = 28;
            }
            
            if ($mjesec == 2 && $godina == 2018){
                $posljednjiDanUmjesecu = 29;
            }
            
?>