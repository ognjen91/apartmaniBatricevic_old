<?php

          

//ovaj query ide zbog renderovanja kalendara
    $rezultat = mysqli_query($connection, $cijeneQuery);
              if (!$rezultat){
                  die("<h1>Greska u komunikaciji sa bazom! </h1>");
              }
      

        while ($rowCijene = mysqli_fetch_assoc($rezultat )){
      
        
           
            
            $posljednjiDanUmjesecu = 31; //ovo je default, mjenjam za dane sa 30 dana i za februar
 
               if ($mjesec == 4 || $mjesec == 6 || $mjesec == 9 || $mjesec == 11) {  
    $posljednjiDanUmjesecu = 30;
 }
            
             if ($mjesec == 2){
                $posljednjiDanUmjesecu = 28;
            }
            
            if ($mjesec == 2 && $godina == 2018){
                $posljednjiDanUmjesecu = 29;
            }
            

   
   for ($i=1; $i<=$posljednjiDanUmjesecu; $i++){
                $cijena = $rowCijene["$i"];
                echo "<tr class='kodCijena'>";
                echo "<td class='datumUnosa'> $i </td>";
                echo "<td> <input name='cijena$i' type='number' value='$cijena'> </td>";
                
                echo "</tr>";
                
            }}

            ?>