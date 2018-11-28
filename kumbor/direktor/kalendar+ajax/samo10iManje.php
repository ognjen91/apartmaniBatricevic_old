 <?php   //slicno kao i kad nemam ponudu sa 10, sa manjim izmjenama
    
   
     //          opet prvo slucaj kada su svi dani u istom mjesecu; u else ako je podjeljeno za 2 mjeseca
  
     $aranzmanKraci = 0;
//echo "$dan $brojacDoZauzetogUkupno";
     if ($dan+$brojacDoZauzetogUkupno<=$posljednjiDanUmjesecu){
            $k=0;
            
        for ($i=$dan; $i<$dan+$brojacDoZauzetogUkupno; $i++){
    $aranzmanKraci += $cijena[$i];
            $k++;
            if ($k==$brojacDoZauzetogUkupno-1){
                 $pomocnaPremjestanjePorukeDani = $k;
                 $pomocnaPremjestanjePorukeCijena = $aranzmanKraci;
                
//                 echo "<p class='aranzman'>$k $day for $aranzmanKraci  &#8364;</p>";
            }
        }
           
if ($k==1 || $k==2){
                $popust = 20; //popust je u procentima, dakle ovo je 5%
}

if ($k==3 || $k==4){
                $popust = 15; //popust je u procentima, dakle ovo je 5%
}

if ($k==5 || $k==6){
                $popust = 10; //popust je u procentima, dakle ovo je 5%
}

if ($k==7 || $k==8){
                $popust = 5; //popust je u procentima, dakle ovo je 5%
}

  $day = 'days';
    if ($k==1){
        $day = 'day';
    }
        
   $aranzmanKraci = round($aranzmanKraci);  

 echo "<p class='aranzman'>$k $day for $aranzmanKraci  &#8364;</p>";
 echo "<p class='aranzman'>$pomocnaPremjestanjePorukeDani $day for $pomocnaPremjestanjePorukeCijena  &#8364;</p>";
   
        } 



         //SADA AKO PONUDA PRESKACE U DRUGI MJSESEC
if ($dan+$brojacDoZauzetogUkupno>$posljednjiDanUmjesecu){

//echo " ukupno: ".$brojacDoZauzetogUkupno." ";
         $danaIzAktivnogMjeseca = $posljednjiDanUmjesecu - $dan + 1;
         $danaIzSljedecegMjeseca = $brojacDoZauzetogUkupno - $danaIzAktivnogMjeseca;

    $ukupanAranzmanKraciPreskok = 0;
   
    $ponudaMinus1 = 0;
    $k=0;
   
   for ($i=$dan; $i<$dan+$danaIzAktivnogMjeseca; $i++){
        $ukupanAranzmanKraciPreskok += $cijena[$i];
//        echo " ".$ukupanAranzmanKraciPreskok;
       
       if ($k == $brojacDoZauzetogUkupno - 2){
           $ponudaMinus1 = $ukupanAranzmanKraciPreskok;
           
           $dana = $k+1;

        
       }
      
       $k++;
      
       }
    
    //sada uzimam dio aranzmana iz aktivnog mjeseca
    $sumaIzAktivnog = $ukupanAranzmanKraciPreskok;
    
    
    $danaIzSljedecegMjeseca = $brojacDoZauzetogUkupno - $k;
    //ulazak u sljedeci mjesec
//    echo "jos $danaIzSljedecegMjeseca";
      for ($m=1; $m<=$danaIzSljedecegMjeseca; $m++){
//          echo "1 ";
        $ukupanAranzmanKraciPreskok += $nextCijena[$m];
//        echo " ".$ukupanAranzmanKraciPreskok;
       
       if ($k == $brojacDoZauzetogUkupno - 2){
           $ponudaMinus1 = $ukupanAranzmanKraciPreskok;
           
           $dana = $k+1;
           
           
       }
        
       $k++;
      
       }
    
//    echo ' '.$brojacDoZauzetogUkupno;
    
//    echo ' '.$danaIzSljedecegMjeseca;
//    echo ' '. $parcijalneSume[$danaIzSljedecegMjeseca];
//    echo $danaIzSljedecegMjeseca;
    $ukupanAranzmanKraciPreskok = $sumaIzAktivnog  + $parcijalneSume[$danaIzSljedecegMjeseca];
     echo "<p class='aranzman'>$brojacDoZauzetogUkupno days for $ukupanAranzmanKraciPreskok &#8364;</p>";
    echo "<p class='aranzman'>$dana days for $ponudaMinus1 &#8364;</p> ";
}



     
 
?>