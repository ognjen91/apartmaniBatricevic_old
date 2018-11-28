     <?php
              $resultCijene = mysqli_query($connection, $cijeneQuery);
              if (!$resultCijene){
                  die("<h1>Greska u komunikaciji sa bazom - cijene! </h1>");
              }
        
        while ($row = mysqli_fetch_assoc($resultCijene)){
        
        
            $objekat = $row["objekat"];
            $soba = $row["soba"];
            $mjesec = $row["mjesec"];
            $godina = "string";
            
            
            
            for ($i=1; $i<32; $i++){
                $cijena{$i} = $row[$i];
//                var_dump($cijena{$i});
        }



        }

      
        ?>
             


<!--
            for ($i=1; $i<32; $i++){
                $dostupnost = $row["$i"];
                
                echo "<div class='dostupnost{$dostupnost}'> $i </div>";
-->
                
                
             