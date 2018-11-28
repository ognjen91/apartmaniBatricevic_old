
<?php 

$nextMjesec = $mjesec + 1;
$nextGodina = $godina;

if ($nextMjesec == 13){
    $nextMjesec = 1;
    $nextGodina++;
}


 $nextPosljednjiDanUmjesecu = 31; //ovo je default, mijenjam za dane sa 30 dana i za februar
     
   if ( $nextMjesec == 11 || $nextMjesec == 9) {  
    $nextPosljednjiDanUmjesecu = 30;
 } 


//1) DOSTUPNOST ZA SLJEDECI MJESEC


$nextSmjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = '$objekat' AND soba='$apartman' AND mjesec=$nextMjesec AND godina=$nextGodina)"; 
//echo $nextSmjestajQuery;


$nextDostupnost = [];


 $nextResultDostupnost = mysqli_query($connection, $nextSmjestajQuery);
              if (!$nextResultDostupnost){
                  die(die('error - next' . mysqli_error($connection)));
              }
        

 while ($nextRow = mysqli_fetch_assoc($nextResultDostupnost)){
        
        
            for ($j=1; $j<=$nextPosljednjiDanUmjesecu; $j++){
                $nextDostupnost[$j] = $nextRow[$j];
                
            }
     
 }


    
     ?>
        

<?php 



//2) CIJENE ZA SLJEDECI MJESEC


$nextCijenaQuery = "SELECT * FROM cijene WHERE (objekat = '$objekat' AND soba='$apartman' AND mjesec=$nextMjesec AND godina=$nextGodina)"; 



$nextCijena = [];


 $nextResultCijena = mysqli_query($connection, $nextCijenaQuery);
              if (!$nextResultCijena){
                  die(die('error - next' . mysqli_error($connection)));
              }
        

 while ($nextRow = mysqli_fetch_assoc($nextResultCijena)){
        
        
            for ($j=1; $j<=$nextPosljednjiDanUmjesecu; $j++){
                $nextCijena[$j] = $nextRow["$j"];
                
            }
     
 }


     
     ?>