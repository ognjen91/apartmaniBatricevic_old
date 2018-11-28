     <?php
              $result = mysqli_query($connection, $smjestajQuery);
              if (!$result){
                  die("<h1>Greska u komunikaciji sa bazom! </h1>");
              }
        
        while ($row = mysqli_fetch_assoc($result)){
        
            
            
            $objekat = $row["objekat"];
            $soba = $row["soba"];
            $mjesec = $row["mjesec"];
            $godina = "string";

            if ($mjesec == "Januar" || $mjesec == "Februar"){
                $godina = "2018";
            }
            
             
            if ($mjesec == "Novembar" || $mjesec == "Decembar"){
                $godina = "2017";
            }
          
            echo "<h4 class='mjesec'> $mjesec $godina </h4>";
            
            if ($mjesec == "Novembar"){
                
                echo "<div class='prazno'></div>";
                echo "<div class='prazno'></div>";
            
            }
            
            
              if ($mjesec == "Decembar"){
                
                echo "<div class='prazno'></div>";
                echo "<div class='prazno'></div>";
                echo "<div class='prazno'></div>";
                echo "<div class='prazno'></div>";
            
            }
            
            
               if ($mjesec == "Januar"){
                
//               januar pocinje u ponedeljak
            
            }
            
            
            
               if ($mjesec == "Februar"){
                
                echo "<div class='prazno'></div>";
                echo "<div class='prazno'></div>";
                echo "<div class='prazno'></div>";
                
            
            }
            
            
            
            
            
            for ($i=1; $i<32; $i++){
                $dostupnost = $row["$i"];
                
                echo "<div class='dostupnost{$dostupnost}'> $i </div>";
                
                
             
                
            }
            
            
            
            
        }
        
        
      
        ?>
            