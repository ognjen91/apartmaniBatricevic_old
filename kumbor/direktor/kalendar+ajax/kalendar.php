<?php

              $result = mysqli_query($connection, $smjestajQuery);
              if (!$result){
                  die("<h1>Greska u komunikaciji sa bazom! </h1>");
              }
        
        while ($row = mysqli_fetch_assoc($result)){
        
        
            $objekat = $row["objekat"];
            $soba = $row["soba"];
            $mjesec = $row["mjesec"];
            $godina = $row["godina"];
            
            $posljednjiDanUmjesecu = 31; //ovo je default, mjenjam za dane sa 30 dana i za februar
     
   if ( $mjesec == 11 || $mjesec == 9) {  
    $posljednjiDanUmjesecu = 30;
 } 

          
            echo "<p class='date'>
            <span id='mjesec'> $mjesec. </span> 
            <span id='godina'> $godina. </span> 
             
            </p>
            <table>
            <tr>
             <td class='zaVrijednosti' id='objekat'>$objekat</td>
             <td class='zaVrijednosti' id='apartman'>$soba</td>
            </tr>
            </table>
            ";
            
            if ($mjesec == 11 & $godina == 2017){
                
                echo "<div class='prazno'></div>";
                echo "<div class='prazno'></div>";
            
            }
            
            
              if ($mjesec == 12 & $godina == 2017){
                
                echo "<div class='prazno'></div>";
                echo "<div class='prazno'></div>";
                echo "<div class='prazno'></div>";
                echo "<div class='prazno'></div>";
            
            }
            
            
               if ($mjesec == 1 & $godina == 2018){
                
//               januar pocinje u ponedeljak
            
            }
            
            
            
               if ($mjesec == 2 & $godina == 2018){
                
                echo "<div class='prazno'></div>";
                echo "<div class='prazno'></div>";
                echo "<div class='prazno'></div>";
                
            
            }
            
            
            
            
            
            for ($i=1; $i<= $posljednjiDanUmjesecu; $i++){
                $dostupnost{$i} = $row["$i"];
                
                echo "<div class='dostupnost{$dostupnost{$i}}'> $i </div>";
                
                
             
                
            }
            
            
            
            
        }
        
        
      
        ?>