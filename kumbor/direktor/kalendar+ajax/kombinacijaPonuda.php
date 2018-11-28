<?php


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
    
  
    
$aranzmanKraci = $aranzmanKraci - $popust/100 * $aranzmanKraci;
$aranzmanKraci = round($aranzmanKraci);
echo "<p class='aranzSaPopustom'>$k $day for $aranzmanKraci  &#8364; <img src='exclamation.png' alt='uzvicnik' class='uzvicnik'><span class='vrijednostPopusta'> - $popust%</span></p>";    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>