<?php

//  a  ovo je ponuda 10 i 21 za aranzmane kod kojih svi dani NISU iz istog mjeseca   

     $dioCijeneIzAktivnogMjeseca = 0;
     for ($i=$dan; $i<=$posljednjiDanUmjesecu; $i++){
         $dioCijeneIzAktivnogMjeseca += $cijena[$i];
     }
     
     
//        echo $dioCijeneIzAktivnogMjeseca;

     
     if ((!array_key_exists ($dan, $ponudaZa10 )) && $daLiSuSlobodniDoKrajaMjeseca[$dan]){ 
        
         $danaDoKrajaMjeseca = $posljednjiDanUmjesecu - $dan +1 ; //

         $zaDodatiDanaIzSljedecegMjes10 = 10 - $danaDoKrajaMjeseca;
//         $zaDodatiDanaIzSljedecegMjes21 = 21 - $danaDoKrajaMjeseca;
//         echo "ovoliko dana: $zaDodatiDanaIzSljedecegMjes21";
         
         if (array_key_exists($zaDodatiDanaIzSljedecegMjes10, $parcijalneSume) ){
//             echo $parcijalneSume[$zaDodatiDanaIzSljedecegMjes10];
$ponudaZa10[$dan] = $dioCijeneIzAktivnogMjeseca + $parcijalneSume[$zaDodatiDanaIzSljedecegMjes10];

         }
           
     }

     
          if ((!array_key_exists ($dan, $ponudaZa21)) && $daLiSuSlobodniDoKrajaMjeseca[$dan]){ 
        
         $danaDoKrajaMjeseca = $posljednjiDanUmjesecu - $dan +1 ; //
//         echo $danaDoKrajaMjeseca;
         $zaDodatiDanaIzSljedecegMjes21 = 21 - $danaDoKrajaMjeseca;
//         $zaDodatiDanaIzSljedecegMjes21 = 21 - $danaDoKrajaMjeseca;
//         echo "ovoliko dana: $zaDodatiDanaIzSljedecegMjes21";
         
         if (array_key_exists($zaDodatiDanaIzSljedecegMjes21, $parcijalneSume) ){
//             echo $parcijalneSume[$zaDodatiDanaIzSljedecegMjes10];
$ponudaZa21[$dan] = $dioCijeneIzAktivnogMjeseca + $parcijalneSume[$zaDodatiDanaIzSljedecegMjes21];

         }
           
     }
 
     
     
    
//     echo  $dioCijeneIzAktivnogMjeseca;
    

?>