<!DOCTYPE html>

<html>
    
<head>
<title>APARTMANI BATRICEVIC</title> 
<link href="bootstrap.min.css?<?=filemtime("bootstrap.min.css")?>" rel="stylesheet" type="text/css" />
<script src="jquery-3.2.1.min.js"></script>
<!--<link href="style.css?<?=filemtime("style.css")?>" rel="stylesheet" type="text/css" />-->
<link rel="stylesheet" type="text/css" href="style.css">
    
    
    
</head>
<body>

asdadsadsa
<?php
    
    $connection = mysqli_connect("localhost", "root", "", "rasko");
      if (!$connection) {
          die("<h1>Greska u povezivanju sa bazom!</h1>)");
      }
    
    

    ?>



    
    
    <div class="okvir">
    
     
<!--        ------------------------KALENDAR 1----------------------->
      
        <div class="kalendar">
            
            
<!--            ------u sustini je ostalo samo da ubacujem objekat, sobu i mjesec u $smjestajQuery ------------->
            
              <?php $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = 'Belvedere' AND soba='Apartman1' AND mjesec='novembar')"; ?>
            
            <?php require "kalendar.php" ?>
            
            
      </div>  
        
            
<!--        ------------------------KALENDAR 2----------------------->
      
        <div class="kalendar">
            
            
<!--            ------u sustini je ostalo samo da ubacujem objekat, sobu i mjesec u $smjestajQuery ------------->
            
              <?php $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = 'Belvedere' AND soba='Apartman1' AND mjesec='decembar')"; ?>

            <?php require "kalendar.php" ?>
            
            
      </div>  
        
        
            
<!--        ------------------------KALENDAR 3----------------------->
      
        <div class="kalendar">
            
            
<!--            ------u sustini je ostalo samo da ubacujem objekat, sobu i mjesec u $smjestajQuery ------------->
            
              <?php $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = 'Belvedere' AND soba='Apartman1' AND mjesec='januar')"; ?>
        

            <?php require "kalendar.php" ?>
            
            
      </div>  
        
            
<!--        ------------------------KALENDAR 4----------------------->
      
        <div class="kalendar">
            
            
<!--            ------u sustini je ostalo samo da ubacujem objekat, sobu i mjesec u $smjestajQuery ------------->
            
              <?php $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = 'Belvedere' AND soba='Apartman1' AND mjesec='februar')"; ?>
        

            <?php require "kalendar.php" ?>
            
            
      </div>  
        
        
        
        
        </div>
    
    
    
    
    
    
    
    
    
    












<script src="jquery-3.2.1.min.js"></script>
<script src="http://localhost:8080/javascript.js"></script>
    </body>    
</html>