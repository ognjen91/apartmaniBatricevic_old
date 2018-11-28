<!DOCTYPE html>

<html>
    
<head>
<title>APARTMANI BATRICEVIC</title> 
<link href="bootstrap.min.css?<?=filemtime("bootstrap.min.css")?>" rel="stylesheet" type="text/css" />
<script src="jquery-3.2.1.min.js"></script>
<link href="style.css?<?=filemtime("style.css")?>" rel="stylesheet" type="text/css" />

</head>
<body>


<?php
    
    $connection = mysqli_connect("localhost", "root", "", "rasko");
      if (!$connection) {
          die("<h1>Greska u povezivanju sa bazom!</h1>)");
      }
    
    

    ?>



    
    
    <div class="okvir okvir-admin">
    
     <h1 class="Rasko">Dje si Rasko!</h1>
        
     
        <form class="kalendar kalendar-admin" action="prihvat-forme-kumbor.php" method="post">
            <!--            -------------OVO JE QUERY KOJI TREBA DA MIJENJAM------------->
   
              <?php $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = 'Kumbor' AND soba='Apartman2' AND mjesec='februar')";
        
              $result = mysqli_query($connection, $smjestajQuery);
              if (!$smjestajQuery){
                  die("<h1>Greska u komunikaciji sa bazom! </h1>");
              }
        
        while ($row = mysqli_fetch_assoc($result)){
        
            
            
            $objekat = $row["objekat"];
            $soba = $row["soba"];
            $mjesec = $row["mjesec"];
            $godina = "string";
//            var_dump($mjesec);
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
            
            
            echo "<form class='admin-formaPromjene'>";
            
              for ($i=1; $i<=31; $i++){
                $dostupnost = $row["$i"];
             
                echo "<div class='admin-dostupnost{$dostupnost}'>
                
                <p class='danUmjesecu'>$i</p>
                <input type='checkbox' value='promjena' name='promjenaDostupnosti{$i}' value='promjenaDostupnosti{$i}' class='checkbox'><br>

                </div>";
                
             }
            
            echo "<div class='izbor'>";
            
            echo "<div class='submit back'>Povratak</div>";
            echo "<input class='submit' name='submit' type='submit' value='Prihvati'>";
            echo "<div>";
            
            
            
            echo "</form>";
            
            
        }
        
        
      
        ?>
         
            
            
            
            
            
      </form>  
        
        
        
        </div>
    

    
    
    
    
    
    
    
    
    












<script src="jquery-3.2.1.min.js"></script>
<script src="http://127.0.0.1/rasko/javascript.js"></script>
    </body>    
</html>