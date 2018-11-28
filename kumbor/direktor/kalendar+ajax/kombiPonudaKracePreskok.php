<?php


if ($dana==1 || $dana==2){
                $popust = 20; //popust je u procentima, dakle ovo je 5%
}

if ($dana==3 || $dana==4){
                $popust = 15; //popust je u procentima, dakle ovo je 5%
}

if ($dana==5 || $dana==6){
                $popust = 10; //popust je u procentima, dakle ovo je 5%
}

if ($dana==7 || $dana==8){
                $popust = 5; //popust je u procentima, dakle ovo je 5%
}


$ponudaMinus2 = $ponudaMinus2 - $popust/100*$ponudaMinus2;
$ponudaMinus1 = $ponudaMinus1 - $popust/100*$ponudaMinus1;
$ponudaMinus2 = round($ponudaMinus2);
$ponudaMinus1 = round($ponudaMinus1);
    
    
    ?>