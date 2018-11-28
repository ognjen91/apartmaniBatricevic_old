<?php $apartman = $_GET["apartman"];

?>
<?php get_header();   ?>
<?php

//ubacujem slucajne brojeve kako bi uvijek bile razlicite slike u galeriji

require get_template_directory() . "/Apartmani/slucajniBrojevi.php"; 

require get_template_directory() . "/Apartmani/opisiSoba.php";


?>

<div class="apartmaniOkvirOdabrano">
    
    <div class="slikaNaVrhu">
        <div class="tekstNaVrhu">
            <h3>
                <?php echo $naslovZaSobu; ?>
            </h3>
            <h4><?php
     if (!isset($_GET['lang'])){
       echo 'Kumbor:'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'Kumbor:';
        
    }
 if($_GET['lang'] == "ru"){
         echo 'Кумбор:';
        
    }
    
  ?>
                <?php echo $punNaziv; ?>
            </h4>
        </div>
    </div>

    <div class="slikeIbaneri">
    <div class="slikeSobe">

        
        <div class="velikeSlike">
        <div class="velikeSlikeOkvir">

            <div class="velikaSlika" id="velikaSlika"><img src='<?php echo get_template_directory_uri(); ?>/slike/<?php echo $apartman; ?>/slika1.jpg'></div>

            <div class="velikaSlika" id="velikaSlika"><img src='<?php echo get_template_directory_uri(); ?>/slike/<?php echo $apartman; ?>/slika<?php echo $broj2; ?>.jpg'></div>

            <div class="velikaSlika" id="velikaSlika"><img src='<?php echo get_template_directory_uri(); ?>/slike/<?php echo $apartman; ?>/slika<?php echo $broj3; ?>.jpg'></div>

            <div class="velikaSlika" id="velikaSlika"><img src='<?php echo get_template_directory_uri(); ?>/slike/<?php echo $apartman; ?>/slika<?php echo $broj4; ?>.jpg'></div>

            <div class="velikaSlika slika5" id="velikaSlika"><img src='<?php echo get_template_directory_uri(); ?>/slike/<?php echo $apartman; ?>/slika<?php echo $broj5; ?>.jpg'></div>

            <div class="velikaSlika slika6" id="velikaSlika"><img src='<?php echo get_template_directory_uri(); ?>/slike/<?php echo $apartman; ?>/slika<?php echo $broj6; ?>.jpg'></div>

            <div class="velikaSlika slika7" id="velikaSlika"><img src='<?php echo get_template_directory_uri(); ?>/slike/<?php echo $apartman; ?>/slika<?php echo $broj7; ?>.jpg'></div>

        </div>

</div>

        <div class="maleSlikeOkvir">
<div class="maleSlike">
            <div class="malaSlika"><img src='<?php echo get_template_directory_uri(); ?>/slike/<?php echo $apartman; ?>/slika1.jpg'></div>

            <div class="malaSlika"><img src='<?php echo get_template_directory_uri(); ?>/slike/<?php echo $apartman; ?>/slika<?php echo $broj2; ?>.jpg'></div>

            <div class="malaSlika"><img src='<?php echo get_template_directory_uri(); ?>/slike/<?php echo $apartman; ?>/slika<?php echo $broj3; ?>.jpg'></div>

            <div class="malaSlika"><img src='<?php echo get_template_directory_uri(); ?>/slike/<?php echo $apartman; ?>/slika<?php echo $broj4; ?>.jpg'></div>

            <div class="malaSlika slika5"><img src='<?php echo get_template_directory_uri(); ?>/slike/<?php echo $apartman; ?>/slika<?php echo $broj5; ?>.jpg'></div>

            <div class="malaSlika slika6"><img src='<?php echo get_template_directory_uri(); ?>/slike/<?php echo $apartman; ?>/slika<?php echo $broj6; ?>.jpg'></div>

            <div class="malaSlika slika7"><img src='<?php echo get_template_directory_uri(); ?>/slike/<?php echo $apartman; ?>/slika<?php echo $broj7; ?>.jpg'></div>
</div>
        </div>



    </div>
        
 <div class="baneriApartman baneriGore">
        
        
        
     <a href="www.belvedere-montenegro.me">
        <img src='<?php echo get_template_directory_uri(); ?>/slike/baneri/belvedere.jpg'>
         </a>
     
      <a href="www.apartmani-boka.me">
        <img src='<?php echo get_template_directory_uri(); ?>/slike/baneri/boka.jpg'>
         </a>
     
      <a href="www.sobe-mitrovic.me">
        <img src='<?php echo get_template_directory_uri(); ?>/slike/baneri/mitrovic.jpg'>
         </a>
     
      <a href="www.guesthouse22.me">
        <img src='<?php echo get_template_directory_uri(); ?>/slike/baneri/gh22.jpg'>
         </a>
       
        
        
        
        
        </div> 
        
        
        
        
        
</div>
    <div class="tekstIspod">
        <h3>
            <?php echo $punNaziv; ?>
        </h3>
        <h4><?php
     if (!isset($_GET['lang'])){
       echo 'od'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'from';
        
    }
 if($_GET['lang'] == "ru"){
         echo 'от';
        
    }
    
  ?>
            <?php echo $pocetnaCijena; ?> &euro; <?php
     if (!isset($_GET['lang'])){
       echo 'za noć'; 
    } 
    if($_GET['lang'] == "en"){
         echo '/night';
        
    }
 if($_GET['lang'] == "ru"){
         echo '/ночь';
        
    }
    
  ?></h4>

    </div>



    <div class="izbor">
        <div class="izaberiRijecima obaIzbora"><?php
     if (!isset($_GET['lang'])){
       echo 'OPIS'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'ROOM';
        
    }
 if($_GET['lang'] == "ru"){
         echo 'ОПИСАНИЕ';
        
    }
    
  ?></div>
        <div class="izaberiTaksativno obaIzbora"><?php
     if (!isset($_GET['lang'])){
       echo 'POGODNOSTI'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'AMENITIES';
        
    }
 if($_GET['lang'] == "ru"){
         echo 'УДОБСТВА';
        
    }
    
  ?></div>
    </div>


    <div class="okvirOpisaIpogodnosti">
    <div class="opisiIpogodnosti">

        <div class="tekstOpisa" id="tekstOpisa">
            <p>
                <?php echo $opis; ?>
            </p>

        </div>

        <div class="pogodnosti" id="pogodnosti">

            <table>


                <?php   
    if(is_array($pogodnosti)){
       
    foreach($pogodnosti as $pogodnost){
        echo "<tr>";
        echo "<td class='pogodnost'>$pogodnost</td>";
        echo "<td class='postoji'><img src='". get_template_directory_uri() . "/slike/checked.png'></td>";
        echo "</tr>";
    }
    
    }
    
    ?>





            </table>

        </div>

    </div>
</div>







<!--============= DOSTUPNOST =======================-->

<?php 
    require get_template_directory() . "/Kalendar/kalendarStart.php"  
?>

<div class="naslovZaSobu">

    
    <?php
     if (!isset($_GET['lang'])){
       echo '<h3>KUMBOR</h3>
    <p>200 sunčanih dana godišnje</p>'; 
    } 
    if($_GET['lang'] == "en"){
         echo '<h3>KUMBOR</h3>
    <p>200 sunny days per year</p>';
        
    } 
    if($_GET['lang'] == "ru"){
         echo '<h3>КУМБОР</h3>
    <p>200 солнечных дней в году</p>';
        
    }
    
  ?>



</div>




<div class="weatherContainer">

<?php 
    require get_template_directory() . "/Ostalo/vrijeme.php"  
?>

</div>

<div class="lokacije">

     <?php
     if (!isset($_GET['lang'])){
       echo '  <h2>Druge lokacije</h2>'; 
    } 
    if($_GET['lang'] == "en"){
         echo '  <h2>Other locations</h2>';
        
    }
    
  ?>
    
  
</div>

 <div class="baneriApartman baneriDole">
        
        
        
     <a href="http://www.belvedere-montenegro.me">
        <img src='<?php echo get_template_directory_uri(); ?>/slike/baneri/belvedere.jpg'>
         </a>
     
      <a href="apartmaniboka">
        <img src='<?php echo get_template_directory_uri(); ?>/slike/baneri/boka.jpg'>
         </a>
     
      <a href="www.sobe-mitrovic.me">
        <img src='<?php echo get_template_directory_uri(); ?>/slike/baneri/mitrovic.jpg'>
         </a>
     
      <a href="www.guesthouse22.me">
        <img src='<?php echo get_template_directory_uri(); ?>/slike/baneri/gh22.jpg'>
         </a>
       
        
        
        
        
        </div>    

</div>


    <style>
        .slikaNaVrhu {
            background-image: linear-gradient( rgba(152, 115, 115, 0.45), rgba(147, 115, 115, 0.45)), url("<?php echo get_template_directory_uri(); ?>/slike/slikeNaVrhu/<?php echo $broj2; ?>.jpg");
        }

    </style>
<?php get_footer(); ?>