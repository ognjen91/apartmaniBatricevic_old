<?php /*

Template Name: Dogadjanja

*/

?>

<?php get_header();   ?>






<div class="okvirDogadjanjaUgradu">
    
    
    <div class="ponudaLijevo">
        <div class="lijeva">
            <?php
     if (!isset($_GET['lang'])){
       echo ' <h1>-20%</h1>
       <h3>Za prve dvije rezervacije</h3>'; 
    } 
    if($_GET['lang'] == "en"){
         echo '<h1>20% off</h1>
       <h3>for first two reservations</h3>';
        
    } 
    if($_GET['lang'] == "ru"){
         echo '<h1>20% скидка</h1>
       <h3>для первых двух заказов</h3>';
        
    }
    
  ?>
       
        
            
            <div class="rezervisi"><a href="http://localhost/kumbor/kontakt"><?php
     if (!isset($_GET['lang'])){
       echo 'REZERVIŠITE ODMAH!'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'BOOK NOW';
        
    }
 if($_GET['lang'] == "ru"){
         echo 'ЗАБРОНИРУЙТЕ СЕЙЧАС';
        
    }
    
 
    
  ?></a></div>
            
            <div class="nazad"><?php
     if (!isset($_GET['lang'])){
       echo 'Nazad'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'Back';
        
    }
 if($_GET['lang'] == "ru"){
         echo 'Назад';
        
    }
    
 
    
  ?></div>
            
        </div>
    </div>
    
    
    <div class="ponudaDesno">
        <div class="desna">
        
           <img src='<?php echo get_template_directory_uri(); ?>/slike/akcije/slika1.jpg'>
           <img src='<?php echo get_template_directory_uri(); ?>/slike/akcije/slika2.jpg'>
           <img src='<?php echo get_template_directory_uri(); ?>/slike/akcije/slikaGlavna.jpg'>
           <img src='<?php echo get_template_directory_uri(); ?>/slike/akcije/slika3.jpg'>
           <img src='<?php echo get_template_directory_uri(); ?>/slike/akcije/slika4.jpg'>
            
            
        
        </div>
    </div>


    <div class="staIkad">

        <div class="eventDate">
            <div class="monthNday">
                <div class="evmonth"><?php
     if (!isset($_GET['lang'])){
       echo 'Maj'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'May';
        
    }
    
  ?></div>
                <div class="evday">1</div>
            </div>
            <div class="evyear">
                <p>2018</p>
            </div>
        </div>

        <div class="eventName">
<?php
     if (!isset($_GET['lang'])){
       echo ' <h3>Prvi maj 2018</h3>'; 
    } 
    if($_GET['lang'] == "en"){
         echo '<h3>May Day 2018</h3>';
        
    }
    
  ?>
           

        </div>

    </div>

    <div class="odbrojavanje">

        <div class="prviRed">
            <div class="odbDan" id="odbDan"></div>
            <div class="odbSat" id="odbSat"></div>
        </div>
        <div class="prozorcicPonude">
            <div class="clickMe1">CLICK</div>
            
            <div><img src='<?php echo get_template_directory_uri(); ?>/slike/akcije/akcija<?php
     if (!isset($_GET['lang'])){
       echo 'SRB'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'ENG';
        
    }
     if($_GET['lang'] == "ru"){
         echo 'ENG';
        
    }            
    
  ?>.png'></div>
            
            <div class="clickMe2">ME</div>
        </div>
        <div class="drugiRed">
            <div class="odbMin" id="odbMin"></div>
            <div class="odbSek" id="odbSek"></div>
        </div>

    </div>



    <div class="idiNaViseOdogadjaju">
        <div id="ajde"><?php
     if (!isset($_GET['lang'])){
       echo 'VIŠE!'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'MORE';
        
    }
 if($_GET['lang'] == "ru"){
         echo 'Узнать больше';
        
    }
    
 
    
  ?></div>

    </div>



</div>

<div class="oDogadjanju" id="oDogadjanju">



    <div id="oDogadjajuDiv">


        <?php 
    require get_template_directory() . "/Ostalo/tekstDogadjanja.php"  
?>

    </div>


</div>










<!--//ubac slucajnog broja-->
<?php 
    require get_template_directory() . "/Homepage/slucBrHome.php"  
?>

<!--//ubac slucajnog broja2-->
<?php 
    require get_template_directory() . "/Homepage/slucBrHome2.php"  
?>



<style>
    .okvirDogadjanjaUgradu {
        background: /* top, transparent red, faked with gradient */
        linear-gradient( rgba(193, 176, 176, 0.12), rgba(109, 92, 92, 0.35)), url('<?php echo get_template_directory_uri(); ?>/slike/dogadjanjaPage/slika3.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
    
    .oDogadjanju {
        background: /* top, transparent red, faked with gradient */
        linear-gradient( rgba(36, 28, 28, 0.23), rgba(36, 24, 24, 0.57)), url('<?php echo get_template_directory_uri(); ?>/slike/dogadjanjaPage/<?php echo $pozadina2 ?>');
        /*
          background-repeat: no-repeat;
    background-size: cover;
*/
    }

</style>










<?php get_footer(); ?>
