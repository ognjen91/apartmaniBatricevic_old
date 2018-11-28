<?php

          

//ovaj query ide zbog renderovanja kalendara
    $result = mysqli_query($connection, $smjestajQuery);
              if (!$result){
                  die("<h1>Greska u komunikaciji sa bazom! </h1>");
              }
        
        while ($row = mysqli_fetch_assoc($result)){
      
        
            
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
            

            

          
            
            
      require "prazniDani.php"; //ovdje su izlistani dani iz proslog mjeseca - oni se nece vidjeti
            
            
            
            
            
            for ($i=1; $i<= $posljednjiDanUmjesecu; $i++){
                $dostupnost{$i} = $row["$i"];
                
                echo "<div class='dostupnost{$dostupnost{$i}}'><input type='checkbox'  name='datum$i'> $i </div>";
                
                
             
                
            }
            
            
            
            
        }
        
        
      
        ?>