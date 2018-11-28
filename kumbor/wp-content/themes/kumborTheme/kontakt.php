<?php /*

Template Name: kontakt

*/

?>


<?php get_header();   ?>


<div class="okvir-forme">
    <?php
     if (!isset($_GET['lang'])){
       echo ' <h2 class="naslov-forme">Kontakt</h2>
    <h3 class="podnaslov-forme">odgovorićemo u najkraćem roku</h3>'; 
    } 
    if($_GET['lang'] == "en"){
         echo ' <h2 class="naslov-forme">Contact us</h2>
    <h3 class="podnaslov-forme">we will answer very soon</h3>';
        
    }
     if($_GET['lang'] == "ru"){
         echo ' <h2 class="naslov-forme">Свяжитесь с нами</h2>
    <h3 class="podnaslov-forme">Мы ответим скоро</h3>';
        
    }
    
  ?>
   
    <?php
     if (!isset($_GET['lang'])){
       echo do_shortcode( '[contact-form-7 id="121" title="Contact form 1"]' );
    } 
    if($_GET['lang'] == "en"){
         echo do_shortcode( '[contact-form-7 id="143" title="Contact form eng"]' );
        
    }
     if($_GET['lang'] == "ru"){
         echo do_shortcode( '[contact-form-7 id="243" title="Contact form ru"]' );
        
    }
    
  ?>
    
    <div class="kontakt-ostalo">
    
 
   <div class="infoImapa">
    <div class="kontakt-info">
     
     <div class="marker"><img src='<?php echo get_template_directory_uri(); ?>/slike/mapMarker.png'></div>
     
     <div class="info-data">
        
         <p class="info-ime"><b>Apartmani Batrićević</b></p>
         <p class="info-adresa">Kumbor 80</p>
         <p class="info-adresa2">85340, Kumbor Montenegro</p>
         <p class="info-telefon">+381 64/201 1000</p>
         <p class="info-mail">rbatricevic@yahoo.com</p>
         
         
        </div>
     
     </div>
      
     
     
     
     
     
    <div class="kontaktMapa">
<div id="map"></div>

</div>
    </div> 
     
     <div class="fbIbaneri">
    <div class="kontaktFb">
    <iframe class="fbinfo" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FApartmaniBatricevic%2F&tabs&width=340&height=154&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="90%" height="154" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    
    </div>

 <div class="baneri-kontakt">
        
        
        
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

    


</div>

</div>












<script>
      function initMap() {
        var uluru = {lat: 42.437649, lng: 18.588567};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpCmZbvaP47PJMfVA7gEB5pn7HDmk_auk&callback=initMap">
    </script>

<?php get_footer(); ?>