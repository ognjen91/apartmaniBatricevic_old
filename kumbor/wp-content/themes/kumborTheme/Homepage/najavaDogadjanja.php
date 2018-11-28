<div class='dogadjajUgradu'>

<div class="naslovDog">

    
<?php
    if (!isset($_GET['lang'])){
       echo '<h2>Herceg Novi</h2>
    <h4>grad koji živi tokom cijele godine</h4>'; 
    } 
    if($_GET['lang'] == "en"){
         echo '<h2>Herceg Novi</h2>
    <h4>city with a lot of happenings all year long</h4>';
        
    }
     if($_GET['lang'] == "ru"){
         echo '<h2>Герцег-Нови</h2>
    <h4>Город, который живет круглый год</h4>';
        
    }
    
  ?>    



</div>



<div class="najavaDog">

<div class="dogadjanje"><h2><?php
    if (!isset($_GET['lang'])){
       echo 'PRVI MAJ AKCIJA'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'FIRST OF MAY DISCOUNT';
        
    }
    
  ?></h2></div>

<div class="timer">
    
<div class="dani" id="dani"></div>

<div class="bezDana">
<div class="sati" id="sati"></div>
<div class="minuti" id="minuti"></div>
<div class="sekunde" id="sekunde"></div>
</div>
    
</div>



<div class="viseDogadjaj"><a href="/dogadjaj<?php 
    require get_template_directory() . "/jezici.php";   
?>"><?php
    if (!isset($_GET['lang'])){
       echo 'KLIKNITE ZA PONUDE'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'CLICK FOR OFFERS';
        
    }
 if($_GET['lang'] == "ru"){
         echo 'Страница АКЦИИ';
        
    }
    
  ?></a></div>





</div>
</div>

<!--//ubac slucajnog broja-->
<?php 
    require get_template_directory() . "/Homepage/slucBrHome.php"  
?>

<style>
    .najavaDog {
        background: 
    /* top, transparent red, faked with gradient */ 
    linear-gradient(
      rgba(193, 176, 176, 0.35), 
      rgba(109, 92, 92, 0.35)
    ), url('<?php echo get_template_directory_uri(); ?>/slike/dogadjanja/<?php echo $pozadina ?>');
          background-repeat: no-repeat;
    background-size: cover;

      
    }

</style>