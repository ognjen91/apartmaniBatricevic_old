
<?php 

$prevMjesec = $mjesec - 1;
$prevGodina = $godina;

if ($prevMjesec == 0){
    $prevMjesec = 12;
    $prevGodina--;
}




 $prevPosljednjiDanUmjesecu = 31; //ovo je default, mijenjam za dane sa 30 dana i za februar
     
   if ( $prevMjesec == 11 || $prevMjesec == 9) {  
    $prevPosljednjiDanUmjesecu = 30;
 } 


//1) DOSTUPNOST ZA PRETHODNI MJESEC


$prevSmjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = '$objekat' AND soba='$apartman' AND mjesec=$prevMjesec AND godina=$prevGodina)"; 



$prevDostupnost = [];


 $prevResultDostupnost = mysqli_query($connection, $prevSmjestajQuery);
              if (!$prevResultDostupnost){
                  die(die('error - prev' . mysqli_error($connection)));
              }
        

 while ($prevRow = mysqli_fetch_assoc($prevResultDostupnost)){
        
        
            for ($j=1; $j<=$prevPosljednjiDanUmjesecu; $j++){
                $prevDostupnost[$j] = $prevRow[$j];
                
            }
     
 }

  ?>
        

<?php 

//2) CIJENE ZA PRETHODNI MJESEC


$prevCijenaQuery = "SELECT * FROM cijene WHERE (objekat = '$objekat' AND soba='$apartman' AND mjesec=$prevMjesec AND godina=$prevGodina)"; 



$prevCijena = [];


 $prevResultCijena = mysqli_query($connection, $prevCijenaQuery);
              if (!$prevResultCijena){
                  die(die('error - prev' . mysqli_error($connection)));
              }
        

 while ($prevRow = mysqli_fetch_assoc($prevResultCijena)){
        
        
            for ($j=1; $j<=$prevPosljednjiDanUmjesecu; $j++){
                $prevCijena[$j] = $prevRow["$j"];
                
            }
     
 }



     
     ?>