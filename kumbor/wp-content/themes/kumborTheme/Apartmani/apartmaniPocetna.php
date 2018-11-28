<?php get_header();   ?>

<div class="apartmaniOkvir">


<div class="prvaCetiri">
<div class="apartman apartman1"><a href='?apartman=Apartman1<?php 
    require get_template_directory() . "/jezici.php"  
?>'><img src='<?php echo get_template_directory_uri(); ?>/slike/Apartman1/slika1.jpg'></a>
 <div class="kratakOpis">
    
     <?php
    if (!isset($_GET['lang'])){
       echo '<h4>Apartman 1</h4>
    <p class="brojKreveta">4+3 kreveta</p>'; 
    } 
    if($_GET['lang'] == "en"){
         echo '<h4>Apartment No. 1</h4>
    <p class="brojKreveta">4+3 beds</p>';
        
    }
      if($_GET['lang'] == "ru"){
         echo '<h4>Aпартамент №1 </h4>
    <p class="brojKreveta">4+3 кровати</p>';
        
    }
    
  ?>
    
     
    </div>
</div>

<div class="apartman apartman2"><a href='?apartman=Apartman2<?php 
    require get_template_directory() . "/jezici.php"  
?>'><img src='<?php echo get_template_directory_uri(); ?>/slike/Apartman2/slika1.jpg'></a>
 <div class="kratakOpis">
    
     <?php
    if (!isset($_GET['lang'])){
       echo '<h4>Apartman 2</h4>
    <p class="brojKreveta">4+3 kreveta</p>'; 
    } 
    if($_GET['lang'] == "en"){
         echo '<h4>Apartment No. 2</h4>
    <p class="brojKreveta">4+3 beds</p>';
        
    }
      if($_GET['lang'] == "ru"){
         echo '<h4>Aпартамент №2 </h4>
    <p class="brojKreveta">4+3 кровати</p>';
        
    }
    
  ?>
     
    </div>
</div>

<div class="apartman apartman3"><a href='?apartman=Apartman3<?php 
    require get_template_directory() . "/jezici.php"  
?>'><img src='<?php echo get_template_directory_uri(); ?>/slike/Apartman3/slika1.jpg'></a>
 <div class="kratakOpis">
    
     <?php
    if (!isset($_GET['lang'])){
       echo '<h4>Apartman 3</h4>
    <p class="brojKreveta">6+1 kreveta</p>'; 
    } 
    if($_GET['lang'] == "en"){
         echo '<h4>Apartment No. 3</h4>
    <p class="brojKreveta">6+1 beds</p>';
        
    }
      if($_GET['lang'] == "ru"){
         echo '<h4>Апартамент №3</h4>
    <p class="brojKreveta">6+1 кровати</p>';
        
    }
    
  ?>
     
    </div>
</div>

<div class="apartman apartman4"><a href='?apartman=Apartman4<?php 
    require get_template_directory() . "/jezici.php"  
?>'><img src='<?php echo get_template_directory_uri(); ?>/slike/Apartman4/slika1.jpg'></a>
 <div class="kratakOpis">
    
    <?php
    if (!isset($_GET['lang'])){
       echo '<h4>Apartman 4</h4>
    <p class="brojKreveta">4 kreveta</p>'; 
    } 
    if($_GET['lang'] == "en"){
         echo '<h4>Apartment No. 4</h4>
    <p class="brojKreveta">4 beds</p>';
        
    }
      if($_GET['lang'] == "ru"){
         echo '<h4>Апартамент №4 </h4>
    <p class="brojKreveta">4 кровати</p>';
        
    }
    
  ?>
     
    </div>
</div>

    </div>
<div class="drugaCetiri">
    
<div class="apartman apartman5"><a href='?apartman=Apartman5<?php 
    require get_template_directory() . "/jezici.php"  
?>'><img src='<?php echo get_template_directory_uri(); ?>/slike/Apartman5/slika1.jpg'></a>
 <div class="kratakOpis">
    
     <?php
    if (!isset($_GET['lang'])){
       echo '<h4>Apartman 5</h4>
    <p class="brojKreveta">4+1 kreveta</p>'; 
    } 
    if($_GET['lang'] == "en"){
         echo '<h4>Apartment No. 5</h4>
    <p class="brojKreveta">4+1 beds</p>';
        
    }
      if($_GET['lang'] == "ru"){
         echo '<h4>Апартамент №5 </h4>
    <p class="brojKreveta">4+1 кровати</p>';
        
    }
    
  ?>
     
    </div>
</div>

<div class="apartman apartman6"><a href='?apartman=Apartman6<?php 
    require get_template_directory() . "/jezici.php"  
?>'><img src='<?php echo get_template_directory_uri(); ?>/slike/Apartman6/slika1.jpg'></a>
 <div class="kratakOpis">
    
     <?php
    if (!isset($_GET['lang'])){
       echo '<h4>Apartman 6</h4>
    <p class="brojKreveta">5+1 kreveta</p>'; 
    } 
    if($_GET['lang'] == "en"){
         echo '<h4>Apartment No. 6</h4>
    <p class="brojKreveta">5+1 beds</p>';
        
    }
      if($_GET['lang'] == "ru"){
         echo '<h4>Апартамент №6 </h4>
    <p class="brojKreveta">5+1 кровати</p>';
        
    }
    
  ?>
     
    </div>
</div>

<div class="apartman apartmanLux"><a href='?apartman=ApartmanLux<?php 
    require get_template_directory() . "/jezici.php"  
?>'><img src='<?php echo get_template_directory_uri(); ?>/slike/ApartmanLux/slika1.jpg'></a>
 <div class="kratakOpis">
    
     <?php
    if (!isset($_GET['lang'])){
       echo '<h4>Apartman Lux</h4>
    <p class="brojKreveta">6+2 kreveta</p>'; 
    } 
    if($_GET['lang'] == "en"){
         echo '<h4>Apartment "Lux"</h4>
    <p class="brojKreveta">6+2 beds</p>';
        
    }
      if($_GET['lang'] == "ru"){
         echo '<h4>Апартамент "Люкс" </h4>
    <p class="brojKreveta">6+2 кровати</p>';
        
    }
    
  ?>
     
    </div>
</div>

<div class="apartman apartman8"><a href='?apartman=Apartman6<?php 
    require get_template_directory() . "/jezici.php"  
?>'><img src='<?php echo get_template_directory_uri(); ?>/slike/Apartman8/slika1.jpg'></a>
 <div class="kratakOpis">
    
    <?php
    if (!isset($_GET['lang'])){
       echo '<h4>Apartman 8</h4>
    <p class="brojKreveta">3 kreveta</p>'; 
    } 
    if($_GET['lang'] == "en"){
         echo '<h4>Apartment No. 8</h4>
    <p class="brojKreveta">3 beds</p>';
        
    }
      if($_GET['lang'] == "ru"){
         echo '<h4>Апартамент №8</h4>
    <p class="brojKreveta">3 кровати</p>';
        
    }
    
  ?>
     
    </div>
</div>

</div>














</div>





<?php get_footer(); ?>


