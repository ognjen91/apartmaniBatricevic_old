<!DOCTYPE html>

<html>
    
<head>
<title>VJEŽBA</title> 

<script src="jquery-3.2.1.min.js"></script>
<link href="CSS/style.css" rel="stylesheet" type="text/css" />

</head>
<!--    <body>-->
<body>

    <?php
    
     $connection = mysqli_connect("localhost", "root", "", "rasko");
      if (!$connection) {
          die("<h1>Greska u povezivanju sa bazom!</h1>)");
      }
    
    

    ?>



    
    
    <div class="okvir">
    
        
        
        <h2>SEZONA ZIMA 2017/18</h2>
     <h3 class="uputstvoMob">Kliknite na datum da biste dobili podatke o slobodnim terminima</h3>
     <h3 class="uputstvoEkr">Predjite kursorom preko datuma da biste dobili podatke o slobodnim terminima</h3>
<!--        ------------------------KALENDAR 1----------------------->
      
        <div class="kalendar">
            
            
<!--            ------u sustini je ostalo samo da ubacujem objekat, sobu i mjesec u $smjestajQuery ------------->
            
            
            
              <?php $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = 'Belvedere' AND soba='Apartman1' AND mjesec='11' AND godina='2017')"; ?>
            
            <?php $cijeneQuery = "SELECT * FROM cijene WHERE (objekat = 'Belvedere' AND soba='Apartman1' AND mjesec='11' AND godina='2017')"; ?>
            
            <?php require "kalendar.php" ?>
            
            
            
      </div>  
        
                <div class="kalendar">
            
            
<!--            ------u sustini je ostalo samo da ubacujem objekat, sobu i mjesec u $smjestajQuery ------------->
            
            
            
              <?php $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = 'Belvedere' AND soba='Apartman1' AND mjesec='12' AND godina='2017')"; ?>
            
            <?php $cijeneQuery = "SELECT * FROM cijene WHERE (objekat = 'Belvedere' AND soba='Apartman1' AND mjesec='12' AND godina='2017')"; ?>
            
            <?php require "kalendar.php" ?>
            
            
            
      </div>  
        
        
                <div class="kalendar">
            
            
<!--            ------u sustini je ostalo samo da ubacujem objekat, sobu i mjesec u $smjestajQuery ------------->
            
            
            
              <?php $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = 'Belvedere' AND soba='Apartman1' AND mjesec='1' AND godina='2018')"; ?>
            
            <?php $cijeneQuery = "SELECT * FROM cijene WHERE (objekat = 'Belvedere' AND soba='Apartman1' AND mjesec='1' AND godina='2018')"; ?>
            
            <?php require "kalendar.php" ?>
            
            
            
      </div>  
        
    
    <div class="datum-info" id="datum-info">
        
    </div>
    
    
    
    </div>
    
    
    
    
    
    
    
<script src="jquery-3.2.1.min.js"></script>
<script src="javascript.js"></script>
    </body>    
</html>