<?php

//ideja je da prvim query-em otkrijem koje sobe su slobodne u navedenom periodu, a drugim query-em iz tabele "opisi" da uzmem potrebne informacije o sobi i predstavim ih

if ($dolaznaGodina == 2018 && $odlaznaGodina == 2018){


$smjestajQuery = "SELECT * FROM smjestaj WHERE objekat = 'Kumbor' AND mjesec='$dolazniMjesec' AND godina='$dolaznaGodina'";

for ($i=$dolazniDan; $i<=$odlazniDan; $i++){
    $smjestajQuery .= " AND `$i`='1'";
    
}

//echo "<h3>$smjestajQuery</h3>";

$result = mysqli_query($connection, $smjestajQuery);
              if (!$result){
                  die("<h1>Greska u komunikaciji sa bazom! </h1>" . mysqli_error($connection));
              }
        
        while ($row = mysqli_fetch_assoc($result)){
  
            $soba = $row["soba"];
            require "informacijeOSobi.php";
     
        }
    
    
    
    
    
    
    



// SREDITI !!!
            






} else {
   echo " <div class='okvir-greske'><div>
    <h2 class='greska-datumi'>Rezervacije za 2019. godinu još nisu dostupne. Molimo vas, izaberite druge datume. </h2><br>
    <h2 class='greska-datumi'>Reservations for 2019. are not available. Please select another date. </h2>
    <a href='http://localhost/kumbor'><h2 class='greska-datumi idi-nazad'>Nazad/Back</h2></a></div>
</div>";
}



?>












































