<?php


if ($k==$brojacDoZauzetogUkupno-1 || $k==$brojacDoZauzetogUkupno-1){
                $popust = 20; //popust je u procentima, dakle ovo je 5%
}


 $day = 'days';
    if ($k==1){
        $day = 'day';
    }               
    
  
    
$dioPonudeIzAktivnog = $dioPonudeIzAktivnog  - $popust/100;
$dioPonudeIzAktivnog = round($dioPonudeIzAktivnog );
echo "<p class='aranzSaPopustom'>$k $day for $dioPonudeIzAktivnog &#8364;<img src='exclamation.png' alt='uzvicnik' class='uzvicnik'><span class='vrijednostPopusta'> - $popust%</span></p>";    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?> 
