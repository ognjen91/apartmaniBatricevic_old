<?php

if ($mjesec == 1 ||  $mjesec == 3 ||  $mjesec == 5 ||  $mjesec == 7 ||  $mjesec == 8 ||  $mjesec == 10 ||  $mjesec == 12){
    $brojDana = 31;
} elseif ($mjesec == 2) {
    $brojDana = 29;
} else {
    $brojDana = 30;
}


?>