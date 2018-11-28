<?php

              $result = mysqli_query($connection, $smjestajQuery);
              $result_cijene = mysqli_query($connection, $cijeneQuery);

              if (!$result || !$result_cijene) {
                  die("<h1>Greska u komunikaciji sa bazom! </h1>");
              }
        
        while (($row = mysqli_fetch_assoc($result)) && ($row_cijene = mysqli_fetch_assoc($result_cijene))){
        
        
            
            $objekat = $row["objekat"];
            $soba = $row["soba"];
            $mjesec = $row["mjesec"];
            $godina = $row["godina"];
            
            $posljednjiDanUmjesecu = 31; //ovo je default, mjenjam za dane sa 30 dana i za februar
     
   if ( $mjesec == 11 || $mjesec == 9 || $mjesec == 4|| $mjesec == 6   ) {  
    $posljednjiDanUmjesecu = 30;
 } 
if ( $mjesec == 2) {  
    $posljednjiDanUmjesecu = 28;
 } 
            
//        UVOZ IMENA MJESECI    
       require "imenaMjeseci.php";     
   
            
            echo "<p class='date'>
            <span id='mjesec'> $imeMjeseca </span> 
            <span id='godina'> $godina. </span> 
             
            </p>";
            
            
            
            echo "<table>
            <tr>
             <td class='zaVrijednosti' id='objekat'>$objekat</td>
             <td class='zaVrijednosti' id='apartman'>$soba</td>
            </tr>
            </table>
            ";
            
           //KORISTICE ZA KASNIJE DA OVO URADIM POSEBNO ZA SVAKI MJESEC
            
            
            if ($mjesec == 1 & $godina == 2018){
                
                //nema praznih dana ali moze koristiti ubuduce
            
            }
            
            
              if ($mjesec == 2 & $godina == 2018){
                
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
             
            
            }
            
            
               if ($mjesec == 3 & $godina == 2018){
                
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
            
            }
            
            
            
               if ($mjesec == 4 & $godina == 2018){
                
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
                
            
            }
            
              if ($mjesec == 5 & $godina == 2018){
                
                echo "<div class='praznoKalend'></div>";
             
            
            }
            
              if ($mjesec == 6 & $godina == 2018){
                
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
            
            }
            
               if ($mjesec == 7 & $godina == 2018){
                
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
             
            
            }
            
               if ($mjesec == 8 & $godina == 2018){
                
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
             
            
            }
            
               if ($mjesec == 9 & $godina == 2018){
                
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
             
            
            }
            
               if ($mjesec == 10 & $godina == 2018){
                
                //pocinje ponedeljkom
             
            
            }
            
               if ($mjesec == 11 & $godina == 2018){
                
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
             
            
            }
            
               if ($mjesec == 12 & $godina == 2018){
                
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
                echo "<div class='praznoKalend'></div>";
             
            
            }
            
            
            
            
            
            
            
            
            
            
//            -----STAMPANJE SAMOG KALENDARA----------
            
            
            for ($i=1; $i<= $posljednjiDanUmjesecu; $i++){
                $dostupnost{$i} = $row["$i"];
                $cijena{$i} = $row_cijene["$i"];
                
                echo "<div class='dostupnost{$dostupnost{$i}}'><div class='dan_datum'>$i</div>
                <div class='cijena_datum'>&euro;{$cijena{$i}}</div>
                 
                </div>";
                
                
             
                
            }
            
            
            
            
        }
        
        
      
        ?>