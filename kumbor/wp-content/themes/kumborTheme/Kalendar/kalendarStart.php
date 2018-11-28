

    <?php
    
     $connection = mysqli_connect("localhost", "root", "", "kumbor");
      if (!$connection) {
          die("<h1>Greska u povezivanju sa bazom!</h1>)");
      }
    
    

    ?>



    
    
    <div class="okvirKalendaraDostupnosti" id="okvirKalendaraDostupnosti">
        
        
<!--        JANUAR-MART-->
        <div class="kvartal prviKvartal">
        
         <div class="nazivKvartala"> 
        
        <h4>ZIMA/PROLJEĆE 2018</h4><div class="naredniKvartal"><span class="kvartalStrelica">---&gt</span><img src='<?php echo get_template_directory_uri(); ?>/slike/arrow.png'></div>
            </div>
<!--
    ovdje cu napraviti mali usklicnik na ciji klik izlazi uputstvo sa sljedecim tekstom:
     <h3 class="uputstvoMob">Kliknite na datum da biste dobili podatke o slobodnim terminima</h3>
     <h3 class="uputstvoEkr">Predjite kursorom preko datuma da biste dobili podatke o slobodnim terminima</h3>
-->
<!--        ------------------------KALENDAR 1----------------------->
      
        <div class="kalendar">
            
            
<!--            ------u sustini je ostalo samo da ubacujem objekat, sobu i mjesec u $smjestajQuery ------------->
            
            
            
              <?php $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='1' AND godina='2018')"; ?>
            
            <?php $cijeneQuery = "SELECT * FROM cijene WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='1' AND godina='2018')"; ?>
            
            <?php require "kalendar.php" ?>
            
            
            
      </div>  
        
                <div class="kalendar">
            
            
<!--            ------u sustini je ostalo samo da ubacujem objekat, sobu i mjesec u $smjestajQuery ------------->
            
            
            
              <?php $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='2' AND godina='2018')"; ?>
            
            <?php $cijeneQuery = "SELECT * FROM cijene WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='2' AND godina='2018')"; ?>
            
            <?php require "kalendar.php" ?>
            
            
            
      </div>  
        
        
                <div class="kalendar">
            
            
<!--            ------u sustini je ostalo samo da ubacujem objekat, sobu i mjesec u $smjestajQuery ------------->
            
            
            
              <?php $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='3' AND godina='2018')"; ?>
            
            <?php $cijeneQuery = "SELECT * FROM cijene WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='3' AND godina='2018')"; ?>
            
            <?php require "kalendar.php" ?>
            
            
            
      </div>  
        
 
    
    
    
    </div>
        
<!--        APRIL - JUN-->
        <div class="kvartal drugiKvartal">
        
            <div class="nazivKvartala"> 
        <div class="prethodniKvartal"><img src='<?php echo get_template_directory_uri(); ?>/slike/arrow.png'><span class="kvartalStrelica">&lt---</span></div>
        <h4>PROLJEĆE/LJETO 2018</h4><div class="naredniKvartal"><span class="kvartalStrelica">---&gt</span><img src='<?php echo get_template_directory_uri(); ?>/slike/arrow.png'></div>
            </div>
<!--
     <h3 class="uputstvoMob">Kliknite na datum da biste dobili podatke o slobodnim terminima</h3>
     <h3 class="uputstvoEkr">Predjite kursorom preko datuma da biste dobili podatke o slobodnim terminima</h3>
-->
<!--        ------------------------KALENDAR 1----------------------->
      
        <div class="kalendar">
            
            
<!--            ------u sustini je ostalo samo da ubacujem objekat, sobu i mjesec u $smjestajQuery ------------->
            
            
            
              <?php $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='4' AND godina='2018')"; ?>
            
            <?php $cijeneQuery = "SELECT * FROM cijene WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='4' AND godina='2018')"; ?>
            
            <?php require "kalendar.php" ?>
            
            
            
      </div>  
        
                <div class="kalendar">
            
            
<!--            ------u sustini je ostalo samo da ubacujem objekat, sobu i mjesec u $smjestajQuery ------------->
            
            
            
             <?php $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='5' AND godina='2018')"; ?>
            
            <?php $cijeneQuery = "SELECT * FROM cijene WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='5' AND godina='2018')"; ?>
            
            <?php require "kalendar.php" ?>
            
            
            
      </div>  
        
        
                <div class="kalendar">
            
            
<!--            ------u sustini je ostalo samo da ubacujem objekat, sobu i mjesec u $smjestajQuery ------------->
            
            
            
             <?php $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='6' AND godina='2018')"; ?>
            
            <?php $cijeneQuery = "SELECT * FROM cijene WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='6' AND godina='2018')"; ?>
            
            <?php require "kalendar.php" ?>
            
            
            
      </div>  
        
    
   
        
    </div>
    
<!--    JUL - SEPTEMBAR-->
        <div class="kvartal treciKvartal">
        
             <div class="nazivKvartala"> 
        <div class="prethodniKvartal"><img src='<?php echo get_template_directory_uri(); ?>/slike/arrow.png'><span class="kvartalStrelica">&lt---</span></div>
        <h4>LJETO/JESEN 2018</h4><div class="naredniKvartal"><span class="kvartalStrelica">---&gt</span><img src='<?php echo get_template_directory_uri(); ?>/slike/arrow.png'></div>
            </div>
<!--
     <h3 class="uputstvoMob">Kliknite na datum da biste dobili podatke o slobodnim terminima</h3>
     <h3 class="uputstvoEkr">Predjite kursorom preko datuma da biste dobili podatke o slobodnim terminima</h3>
-->
<!--        ------------------------KALENDAR 1----------------------->
      
        <div class="kalendar">
            
            
<!--            ------u sustini je ostalo samo da ubacujem objekat, sobu i mjesec u $smjestajQuery ------------->
            
            
            
            <?php $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='7' AND godina='2018')"; ?>
            
            <?php $cijeneQuery = "SELECT * FROM cijene WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='7' AND godina='2018')"; ?>
            
            <?php require "kalendar.php" ?>
            
            
            
      </div>  
        
                <div class="kalendar">
            
            
<!--            ------u sustini je ostalo samo da ubacujem objekat, sobu i mjesec u $smjestajQuery ------------->
            
            
            
              <?php $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='8' AND godina='2018')"; ?>
            
            <?php $cijeneQuery = "SELECT * FROM cijene WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='8' AND godina='2018')"; ?>
                    
            <?php require "kalendar.php" ?>
            
            
            
      </div>  
        
        
                <div class="kalendar">
            
            
<!--            ------u sustini je ostalo samo da ubacujem objekat, sobu i mjesec u $smjestajQuery ------------->
            
            
            
              <?php $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='9' AND godina='2018')"; ?>
            
            <?php $cijeneQuery = "SELECT * FROM cijene WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='9' AND godina='2018')"; ?>
            
            <?php require "kalendar.php" ?>
            
            
            
      </div>  
        
    
   
    
    
    
    </div>
        
<!--        OKTOBAR - DECEMBAR-->
        <div class="kvartal cetvrtiKvartal">
        
         <div class="nazivKvartala"> 
        <div class="prethodniKvartal"><img src='<?php echo get_template_directory_uri(); ?>/slike/arrow.png'><span class="kvartalStrelica">&lt---</span></div>
        <h4>JESEN/ZIMA 2018</h4>
            </div>
<!--
     <h3 class="uputstvoMob">Kliknite na datum da biste dobili podatke o slobodnim terminima</h3>
     <h3 class="uputstvoEkr">Predjite kursorom preko datuma da biste dobili podatke o slobodnim terminima</h3>
-->
<!--        ------------------------KALENDAR 1----------------------->
      
        <div class="kalendar">
            
            
<!--            ------u sustini je ostalo samo da ubacujem objekat, sobu i mjesec u $smjestajQuery ------------->
            
            
            
              <?php $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='10' AND godina='2018')"; ?>
            
            <?php $cijeneQuery = "SELECT * FROM cijene WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='10' AND godina='2018')"; ?>
            
            <?php require "kalendar.php" ?>
            
            
            
      </div>  
        
                <div class="kalendar">
            
            
<!--            ------u sustini je ostalo samo da ubacujem objekat, sobu i mjesec u $smjestajQuery ------------->
            
            
            
              <?php $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='11' AND godina='2018')"; ?>
            
            <?php $cijeneQuery = "SELECT * FROM cijene WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='11' AND godina='2018')"; ?>
            
            <?php require "kalendar.php" ?>
            
            
            
      </div>  
        
        
                <div class="kalendar">
            
            
<!--            ------u sustini je ostalo samo da ubacujem objekat, sobu i mjesec u $smjestajQuery ------------->
            
            
            
              <?php $smjestajQuery = "SELECT * FROM smjestaj WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='12' AND godina='2018')"; ?>
            
            <?php $cijeneQuery = "SELECT * FROM cijene WHERE (objekat = 'Kumbor' AND soba='$apartman' AND mjesec='12' AND godina='2018')"; ?>
            
            <?php require "kalendar.php" ?>
            
         </div>    
            
      </div>  
        
 
        
    
    <div class="datum-info" id="datum-info">
        
    </div>
    
    
    
    </div>

    
    
    
    
  