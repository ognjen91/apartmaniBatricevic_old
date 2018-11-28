 <?php     //sada kada imam broj slobodnih dana ukupno, mogu da odredim cijenu;
//     ovaj kod se nalazi upravo ovdje jer je prvo trebalo odrediti da li postoji ponuda za 10 dana, sto je potrebno za provjeru
    
   
     //          opet prvo slucaj kada su svi dani u istom mjesecu; u else ako je podjeljeno za 2 mjeseca
  
     $aranzmanKraci = 0;
     if ($dan+$brojacDoZauzetogUkupno<=$posljednjiDanUmjesecu && !array_key_exists ($dan, $ponudaZa10) ){
            $k=0;
            
        for ($i=$dan; $i<$dan+$brojacDoZauzetogUkupno; $i++){
    $aranzmanKraci += $cijena[$i];
            $k++;
            if ($k==$brojacDoZauzetogUkupno-2 || $k==$brojacDoZauzetogUkupno-1){
                include "kombinacijaPonuda.php";
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

echo "<p class='aranzSaPopustom'>$k $day for $aranzmanKraci &#8364;<img src='exclamation.png' alt='uzvicnik' class='uzvicnik'><span class='vrijednostPopusta'> - $popust%</span></p>";
   
        } 



         //SADA AKO PONUDA PRESKACE U DRUGI MJSESEC
if ($dan+$brojacDoZauzetogUkupno>$posljednjiDanUmjesecu && !array_key_exists ($dan, $ponudaZa10)){

//echo " $dan $brojacDoZauzetogUkupno $posljednjiDanUmjesecu";
         $danaIzAktivnogMjeseca = $posljednjiDanUmjesecu - $dan + 1;
         $danaIzSljedecegMjeseca = $brojacDoZauzetogUkupno - $danaIzAktivnogMjeseca;

    $ukupanAranzmanKraciPreskok = 0;
    $ponudaMinus2 = 0;
    $ponudaMinus1 = 0;
    $k=0;
   
   for ($i=$dan; $i<$dan+$danaIzAktivnogMjeseca; $i++){
        $ukupanAranzmanKraciPreskok += $cijena[$i];
//        echo " ".$ukupanAranzmanKraciPreskok;
       
       if ($k == $brojacDoZauzetogUkupno - 2){
           $ponudaMinus2 = $ukupanAranzmanKraciPreskok;
           $dana = $k+1;
           include "kombiPonudaKracePreskok.php";
           echo "<p>$dana days for $ponudaMinus2  &#8364; <img src='exclamation.png' alt='uzvicnik' class='uzvicnik'><span class='vrijednostPopusta'> - $popust%</span></p> ";
       }
        if ($k == $brojacDoZauzetogUkupno - 3){
           $ponudaMinus1 = $ukupanAranzmanKraciPreskok;
            $dana = $k+1;
            include "kombiPonudaKracePreskok.php";
            echo "<p>$dana days for $ponudaMinus1  &#8364; <img src='exclamation.png' alt='uzvicnik' class='uzvicnik'><span class='vrijednostPopusta'> - $popust%</span></p> ";
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
           $ponudaMinus2 = $ukupanAranzmanKraciPreskok;
           $dana = $k+1;
           include "kombiPonudaKracePreskok.php";
           echo "<p class='aranzSaPopustom'>$dana days for $ponudaMinus2 &#8364; <img src='exclamation.png' alt='uzvicnik' class='uzvicnik'><span class='vrijednostPopusta'> - $popust%</span></p> ";
       }
        if ($k == $brojacDoZauzetogUkupno - 3){
           $ponudaMinus1 = $ukupanAranzmanKraciPreskok;
            $dana = $k+1;
            include "kombiPonudaKracePreskok.php";
            echo "<p class='aranzSaPopustom'>$dana days for $ponudaMinus1 &#8364; <img src='exclamation.png' alt='uzvicnik' class='uzvicnik'><span class='vrijednostPopusta'> - $popust%</span></p> ";
       }
       $k++;
      
       }
    
//    echo ' '.$brojacDoZauzetogUkupno;
    
//    echo ' '.$danaIzSljedecegMjeseca;
//    echo ' '. $parcijalneSume[$danaIzSljedecegMjeseca];
    $ukupanAranzmanKraciPreskok = $sumaIzAktivnog  + $parcijalneSume[$danaIzSljedecegMjeseca];
    
    
    include "kombinacijeKonacnaPonudaKrace.php";
    
    
    
     echo "<p class='aranzSaPopustom'>$brojacDoZauzetogUkupno days for $ukupanAranzmanKraciPreskok &#8364; <img src='exclamation.png' alt='uzvicnik' class='uzvicnik'><span class='vrijednostPopusta'> - $popust%</span></p>";
}



     
 
?>