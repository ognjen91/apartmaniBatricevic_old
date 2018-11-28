<?php

if ($dolaznaGodina == 2018 && $odlaznaGodina == 2018){

//ubacicu sobe koje odgovaraju kriterijumu, ubaciti ih u array i ako se u arrayu pojavljuju onoliko puta kolika je razlika izmedju 2 mjeseca, ta nam soba odgovara
   
    $razlikaMjeseci = $odlazniMjesec - $dolazniMjesec +1; 
    $sobeKandidati = [];
    require "mjeseci.php";
    
for ($mjesec=$dolazniMjesec; $mjesec<= $odlazniMjesec; $mjesec++){
    
    if ($mjesec == $dolazniMjesec){
        $prviDanProvjere = $dolazniDan;
        $posljednjiDanProvjere = $brojDana;
    } elseif ($mjesec == $odlazniMjesec){
        $prviDanProvjere = 1;
        $posljednjiDanProvjere = $odlazniDan;
    } else {
        $prviDanProvjere = 1;
        $posljednjiDanProvjere = $brojDana;
    }
        
        
     $smjestajQuery = "SELECT * FROM smjestaj WHERE objekat = 'Kumbor' AND mjesec='$mjesec'";
        
    for ($dan=$prviDanProvjere; $dan<$posljednjiDanProvjere; $dan++){
        $smjestajQuery .= "AND `$dan` = '1'";
    }
    
       $result = mysqli_query($connection, $smjestajQuery);
              if (!$result){
                  die("<h1>Greska u komunikaciji sa bazom! </h1>" . mysqli_error($connection));
              }
        
        while ($row = mysqli_fetch_assoc($result)){
  
            $sobaKandidat = $row["soba"]; 
            $sobeKandidati[] = $sobaKandidat;
        
        
    }
    
}
    
    $arraySaIzbrojanimKandidatima = array_count_values($sobeKandidati);
//    var_dump($arraySaIzbrojanimKandidatima);
    $konacniArraySaSobama = [];

    
        foreach ($arraySaIzbrojanimKandidatima as $kandidat => $brojPojavljivanja) {
             if ($brojPojavljivanja == $razlikaMjeseci){
                 $konacniArraySaSobama[] = $kandidat;
             }
}
    
    

var_dump($konacniArraySaSobama);

foreach ($konacniArraySaSobama as $soba){
    
    
   require "informacijeOSobi.php";
    
    
}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}














 else {
   echo " <div class='okvir-greske'><div>
    <h2 class='greska-datumi'>Rezervacije za 2019. godinu još nisu dostupne. Molimo vas, izaberite druge datume. </h2><br>
    <h2 class='greska-datumi'>Reservations for 2019. are not available. Please select another date. </h2>
    <a href='http://localhost/kumbor'><h2 class='greska-datumi idi-nazad'>Nazad/Back</h2></a></div>
</div>";
}


?>








































































