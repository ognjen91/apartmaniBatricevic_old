<?php


$broj2 = rand(2,7);
$broj3 = rand(2,7);
$broj4 = rand(2,7);
$broj5 = rand(2,7);
$broj6 = rand(2,7);
$broj7 = rand(2,7);



if ($broj3 == $broj2)
{
    while ($broj3 == $broj2){
        $broj3 = rand(2,7);
    }
}
if ($broj4 == $broj2 || $broj4 == $broj3)
{
    while ($broj4 == $broj2 || $broj4 == $broj3){
        $broj4 = rand(2,7);
    }
}

if ($broj5 == $broj2 || $broj5 == $broj3 || $broj5 == $broj4)
{
    while ($broj5 == $broj2 || $broj5 == $broj3 || $broj5 == $broj4){
        $broj5 = rand(2,7);
    }
}

if ($broj6 == $broj2 || $broj6 == $broj3 || $broj6 == $broj4 || $broj6 == $broj5)
{
    while ($broj6 == $broj2 || $broj6 == $broj3 || $broj6 == $broj4 || $broj6 == $broj5){
        $broj6 = rand(2,7);
    }
}

if ($broj7 == $broj2 || $broj7 == $broj3 || $broj7 == $broj4 || $broj7 == $broj5 || $broj7 == $broj6)
{
    while ($broj7 == $broj2 || $broj7 == $broj3 || $broj7 == $broj4 || $broj7 == $broj5 || $broj7 == $broj6){
        $broj7 = rand(2,7);
    }
}


//echo $broj1 . " ";
//echo  $broj2 . " ";
//echo $broj3 . " ";
//echo $broj4 . " ";
//echo $broj5 . " ";
//echo  $broj6 . " ";
//echo $broj7 . " ";





?>
