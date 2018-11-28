 
    <div class="shalt">
        
        <div class='shaltStart'><div id="izbornaSlicica"><img id="izborna"  src='<?php echo get_template_directory_uri(); ?>/slike/arrow.png'></div><div class="trenutno">KUMBOR</div></div>
        
    
   <div class="objIgo" id="objIgo">
    <div class="objIzbor">
        
        <div class="goBelv goSite"><a href="http://www.belvedere-montenegro.me"><?php
     if (!isset($_GET['lang'])){
       echo 'APARTMANI BELVEDERE'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'APARTMENTS BELVEDERE';
        
    }
    
  ?></a></div>
        <div class="goBoka goSite"><a href="http://www.boka-apartmani.me"><?php
     if (!isset($_GET['lang'])){
       echo 'APRTMANI BOKA'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'APARTMENTS BOKA';
        
    }
    
  ?></a></div>
        <div class="goMitr goSite"><a href="http://www.sobemitorvic.me"><?php
     if (!isset($_GET['lang'])){
       echo 'SOBE MITROVIĆ'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'MITROVIĆ ROOMS';
        
    }
    
  ?></a></div>
        <div class="goGH22 goSite"><a href="http://www.guesthouse22.me">GUEST HOUSE 22</a></div>
        
         
        
        </div>
    
    <div class="goIzbor"></div>
    </div> 
       
       
    </div>
