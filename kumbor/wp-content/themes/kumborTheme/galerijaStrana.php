<?php /*

Template Name: Galerija

*/


?>
<?php get_header();   ?>





<div class="okvir-galerija">



<div class="navigacija-galerija">
    <div class="prikaziSve" id="prikaziSve"><?php
     if (!isset($_GET['lang'])){
       echo 'SVE'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'ALL';
        
    }
 if($_GET['lang'] == "ru"){
         echo 'ВСЕ';
        
    }
    
  ?></div>
    <div class="prikaziBastu" id="prikaziBastu"><?php
     if (!isset($_GET['lang'])){
       echo 'BAŠTA'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'GARDEN';
        
    }
 if($_GET['lang'] == "ru"){
         echo 'САД';
        
    }
    
  ?></div>
    <div class="prikaziPlazu" id="prikaziPlazu"><?php
     if (!isset($_GET['lang'])){
       echo 'PLAŽA'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'BEACH';
        
    }
 if($_GET['lang'] == "ru"){
         echo 'ПЛЯЖ';
        
    }
    
  ?></div>
    <div class="prikaziOkolinu" id="prikaziOkolinu"><?php
     if (!isset($_GET['lang'])){
       echo 'OKOLINA'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'ТHE BOKA BAY';
        
    }
 if($_GET['lang'] == "ru"){
         echo 'КОТОРСКИЙ ЗАЛИВ';
        
    }
    
  ?></div>
    
    
    
    </div>

<div class="slikeGalerije">
    
    <div class="slikePlaze slikeIzGelerije" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/2.jpg'>
    </div>
    <div class="slikePlaze slikeIzGelerije" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/1a.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/2.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/1a.jpg'>
    </div>
    <div class="slikeOkoline slikeIzGelerije" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/okolina/2.jpg'>
    </div>
    <div class="slikePlaze slikeIzGelerije" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/2a.jpg'>
    </div>
    
    
    
     <div class="slikePlaze slikeIzGelerije" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/3.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/3.jpg'>
    </div>
    <div class="slikePlaze slikeIzGelerije" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/3a.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/2a.jpg'>
    </div>
    <div class="slikeOkoline slikeIzGelerije" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/okolina/3.jpg'>
    </div>
    
     <div class="slikePlaze slikeIzGelerije" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/4.jpg'>
    </div>
    <div class="slikePlaze slikeIzGelerije" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/4a.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/4.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/3a.jpg'>
    </div>
    <div class="slikeOkoline slikeIzGelerije" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/okolina/4.jpg'>
    </div>
    
     <div class="slikePlaze slikeIzGelerije" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/5.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/4a.jpg'>
    </div>
    <div class="slikePlaze slikeIzGelerije" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/5a.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/5.jpg'>
    </div>
   <div class="slikePlaze slikeIzGelerije" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/6a.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/5a.jpg'>
    </div>
    
    
    
    
     <div class="slikePlaze slikeIzGelerije min640" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/1.jpg'>
    </div>
    <div class="slikePlaze slikeIzGelerije min640" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/7a.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije min640" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/1.jpg'>
    </div>
     <div class="slikeBaste slikeIzGelerije min640" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/6a.jpg'>
    </div>
   
    
     <div class="slikePlaze slikeIzGelerije min640" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/6.jpg'>
    </div>
    <div class="slikePlaze slikeIzGelerije min640" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/8a.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije min640" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/6.jpg'>
    </div>
    <div class="slikeOkoline slikeIzGelerije min640" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/okolina/6.jpg'>
    </div>
     <div class="slikeBaste slikeIzGelerije min640" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/7a.jpg'>
    </div>
    
     <div class="slikePlaze slikeIzGelerije min640" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/7.jpg'>
    </div>
    <div class="slikePlaze slikeIzGelerije min640" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/9a.jpg'>
    </div>
     <div class="slikeBaste slikeIzGelerije min640" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/8a.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije min640" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/7.jpg'>
    </div>
    <div class="slikeOkoline slikeIzGelerije min640" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/okolina/7.jpg'>
    </div>
    
     <div class="slikePlaze slikeIzGelerije min640" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/8.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije min640" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/8.jpg'>
    </div>
    <div class="slikeOkoline slikeIzGelerije min640" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/okolina/8.jpg'>
    </div>
    
     <div class="slikePlaze slikeIzGelerije min640" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/9.jpg'>
    </div>
     <div class="slikeBaste slikeIzGelerije min640" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/9a.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije min768" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/9.jpg'>
    </div>
    <div class="slikeOkoline slikeIzGelerije min768" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/okolina/9.jpg'>
    </div>
    
     <div class="slikePlaze slikeIzGelerije min768" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/10.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije min768" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/10.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije min768" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/10a.jpg'>
    </div>
    <div class="slikeOkoline slikeIzGelerije min768" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/okolina/10.jpg'>
    </div>
    
     <div class="slikePlaze slikeIzGelerije min768" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/11.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije min768" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/11.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije min768" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/11a.jpg'>
    </div>
   
    
     <div class="slikePlaze slikeIzGelerije min768" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/12.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije min768" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/12.jpg'>
    </div>
    <div class="slikeOkoline slikeIzGelerije min992" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/okolina/12.jpg'>
    </div>
    
     <div class="slikePlaze slikeIzGelerije min992" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/13.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije min992" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/13.jpg'>
    </div>
   
    
     <div class="slikePlaze slikeIzGelerije min992" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/14.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije min992" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/14.jpg'>
    </div>
    <div class="slikeOkoline slikeIzGelerije min1200" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/okolina/14.jpg'>
    </div>
    
     <div class="slikePlaze slikeIzGelerije min1200" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/15.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije min1200" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/15.jpg'>
    </div>
  
      <div class="slikePlaze slikeIzGelerije min1200" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/16.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije min1200" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/16.jpg'>
    </div>
    
       <div class="slikePlaze slikeIzGelerije min1200" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/17.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije min1200" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/17.jpg'>
    </div>
    
       <div class="slikePlaze slikeIzGelerije min1200" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/plaza/18.jpg'>
    </div>
    <div class="slikeBaste slikeIzGelerije min1200" >
    <img src='<?php echo get_template_directory_uri(); ?>/slike/basta/18.jpg'>
    </div>
    
   
    

    
    </div>
<div class="okvir-slike">
    
    <div class="odabranaSlika">
       <div>
    <div class="zatvoriSliku">X</div>
    <img src='<?php echo get_template_directory_uri(); ?>/slike/placeholder.jpg'>
        </div>
    </div>

    
    </div>


    
    
    
</div>



<?php get_footer(); ?>











