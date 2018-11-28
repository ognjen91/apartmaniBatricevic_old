<?php


if ($brojacDoZauzetogUkupno==1 || $brojacDoZauzetogUkupno==2){
                $popust = 20; //popust je u procentima, dakle ovo je 5%
}

if ($brojacDoZauzetogUkupno==3 || $brojacDoZauzetogUkupno==4){
                $popust = 15; //popust je u procentima, dakle ovo je 5%
}

if ($brojacDoZauzetogUkupno==5 || $brojacDoZauzetogUkupno==6){
                $popust = 10; //popust je u procentima, dakle ovo je 5%
}

if ($brojacDoZauzetogUkupno==7 || $brojacDoZauzetogUkupno==8){
                $popust = 5; //popust je u procentima, dakle ovo je 5%
}



  
    
$ukupanAranzmanKraciPreskok = $ukupanAranzmanKraciPreskok - $popust/100 * $ukupanAranzmanKraciPreskok;
$ukupanAranzmanKraciPreskok = round($ukupanAranzmanKraciPreskok);
  
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>