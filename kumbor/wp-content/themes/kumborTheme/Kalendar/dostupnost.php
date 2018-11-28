<?php $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = '$objekat' AND soba='$apartman' AND mjesec=$mjesec AND godina=$godina)"; ?>


<?php 
//echo "$objekat $apartman $mjesec $godina";

$dostupnost = [];


 $result = mysqli_query($connection, $smjestajQuery);
              if (!$result){
                  die("<h1>Greska u komunikaciji sa bazom! </h1>");
              }
        

 while ($row = mysqli_fetch_assoc($result)){
        
   
            
            for ($i=1; $i<=$posljednjiDanUmjesecu; $i++){
                $dostupnost[$i] = $row[$i];
//                echo "$i : $dostupnost[$i] <br>";
//                var_dump($dostupnost[$i] );
            }
     
 }


     
     ?>
                