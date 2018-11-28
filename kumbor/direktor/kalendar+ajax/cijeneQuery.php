<?php

$cijeneQuery = "SELECT * FROM cijene WHERE (objekat = '$objekat' AND soba='$apartman' AND mjesec=$mjesec AND godina=$godina)";
   
       $cijena = []; 


     $resultCijene = mysqli_query($connection, $cijeneQuery);
              if (!$resultCijene){
                  die("<h1>Greska u komunikaciji sa bazom - cijene! </h1>");
              }
        
        while ($row = mysqli_fetch_assoc($resultCijene)){
        
         
          
            
            for ($i=1; $i<=$posljednjiDanUmjesecu; $i++){
                $cijena[$i] = $row[$i];
//                echo "$i : $cijena[$i] <br>";
        }



        }

?>