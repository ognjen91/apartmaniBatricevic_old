<div class="previewSoba">

    <div class="saTekstom">
<div class="naslovIparagraf">
    
   <?php
    if (!isset($_GET['lang'])){
       echo '<h2>Komfor<br> u srcu Boke</h2>

        <p>Kompletno opremljeni apartmani u najmirnijem dijelu zaliva</p>'; 
    } 
    if($_GET['lang'] == "en"){
         echo '<h2 class="strani">Comfort</h2>

        <p>Fully equipped apartments in quiet part of the bay</p>';
        
    }
      if($_GET['lang'] == "ru"){
         echo '<h2 class="strani">Комфорт в сердце Боки</h2>

        <p>Полностью оборудованные апартаменты в самой спокойной части залива</p>';
        
    }
    
    
        
   
        ?>

</div>

    </div>

    <div class="prevAps">


        <div class="prevAp prevAp1">
          <div class="apWrap">
            <div class="apImg">
                <a href="../apartmani/?apartman=Apartman1<?php
                    require get_template_directory() . "/jezici.php"; ?>">
                        <img src='<?php echo get_template_directory_uri(); ?>/slike/Apartman1/slika1.jpg'>
                  </a>
            </div>
            <div class="apartmInfo">
                <a href="../apartmani/?apartman=Apartman1<?php
                    require get_template_directory() . "/jezici.php"; ?>">
                    
            
 <?php
    if (!isset($_GET['lang'])){
       echo '<h5>Apartman 1</h5>
                </a>
                <p>6 kreveta</p>
                <p class="apartCijena">od<span class="odE"> 100 &euro; </span>/noć</p>'; 
    } 
    if($_GET['lang'] == "en"){
         echo '<h5>Apartment No. 1</h5>
                </a>
                <p>6 beds</p>
                <p class="apartCijena">from<span class="odE"> 100 &euro; </span>/night</p>';
        
    }
                    
                     if($_GET['lang'] == "ru"){
         echo '<h5>Апартамент №1</h5>
                </a>
                <p>6 кровати</p>
                <p class="apartCijena">oт<span class="odE"> 100 &euro; </span>/ночь</p>';
        
    }
        
   
        ?>        
                
            </div>
              </div>
        </div>
        
<!--            PREVIEW AP 4 -->
            
            
            <div class="prevAp prevAp4">
          <div class="apWrap">
            <div class="apImg">
                <a href="../apartmani/?apartman=Apartman4<?php
                    require get_template_directory() . "/jezici.php"; ?>">
                        <img src='<?php echo get_template_directory_uri(); ?>/slike/Apartman4/slika1.jpg'>
                  </a>
            </div>
            <div class="apartmInfo">
               
                
 <?php
    if (!isset($_GET['lang'])){
       echo ' <a href="../apartmani/?apartman=Apartman4">
                <h5>Apartman 4</h5>
                </a>
                <p>4 kreveta</p>
                <p class="apartCijena">od<span class="odE"> 100 &euro; </span>/noć</p>'; 
    } 
    if($_GET['lang'] == "en"){
         echo ' <a href="../apartmani/?Apartman=Apartman4?lang=en">
                <h5>Apartment No. 4</h5>
                </a>
                <p>4 beds</p>
                <p class="apartCijena">from<span class="odE"> 100 &euro; </span>/night</p>';
        
    } 
    
    if($_GET['lang'] == "ru"){
         echo ' <a href="../apartmani/?Apartman=Apartman4?lang=en">
                <h5>Апартамент №4</h5>
                </a>
                <p>4 кровати</p>
                <p class="apartCijena">oт<span class="odE"> 100 &euro; </span>/ночь</p>';
        
    }
        
   
        ?>
                
                
               
            </div>
              </div>
        </div>
        
            
<!--            PREVIEW AP LUX-->
            <div class="prevAp prevApLux">
          <div class="apWrap">
            <div class="apImg">
                <a href="../apartmani/?apartman=ApartmanLux<?php
                    require get_template_directory() . "/jezici.php"; ?>">
                        <img src='<?php echo get_template_directory_uri(); ?>/slike/ApartmanLux/slika1.jpg'>
                  </a>
            </div>
            <div class="apartmInfo">
                
                
 <?php
    if (!isset($_GET['lang'])){
       echo ' <a href="../apartmani/?apartman=ApartmanLux">
                <h5>Apartman Lux</h5>
                </a>
                <p>6 kreveta</p>
                <p class="apartCijena">od<span class="odE"> 100 &euro; </span>/noć</p>'; 
    } 
    if($_GET['lang'] == "en"){
         echo '<a href="../apartmani/?apartman=ApartmanLux?lang=en">
                <h5>Apartment Lux</h5>
                </a>
                <p>6 beds</p>
                <p class="apartCijena">from<span class="odE"> 100 &euro; </span>/night</p>';
        
    }
                
                 if($_GET['lang'] == "ru"){
         echo '<a href="../apartmani/?apartman=ApartmanLux?lang=en">
                <h5>Апартамент "Люкс"</h5>
                </a>
                <p>6 кровати</p>
                <p class="apartCijena">from<span class="odE"> 100 &euro; </span>/ночь</p>';
        
    }
        
   
        ?>
                
               
            </div>
              </div>
        </div>
        
            
<!--            PREVIEW AP 8-->
            <div class="prevAp prevAp8">
          <div class="apWrap">
            <div class="apImg">
                <a href="../apartmani/?apartman=Apartman8<?php
                    require get_template_directory() . "/jezici.php"; ?>">
                        <img src='<?php echo get_template_directory_uri(); ?>/slike/Apartman8/slika1.jpg'>
                  </a>
            </div>
            <div class="apartmInfo">
                
                
 <?php
    if (!isset($_GET['lang'])){
       echo ' <a href="../apartmani?apartman=Apartman8">
                <h5>Apartman 8</h5>
                </a>
                <p>3 kreveta</p>
                <p class="apartCijena">od<span class="odE"> 100 &euro; </span>/noć</p>'; 
    } 
    if($_GET['lang'] == "en"){
         echo ' <a href="../apartmani/?apartman=Apartman8?lang=en">
                <h5>Apartment No. 8</h5>
                </a>
                <p>3 beds</p>
                <p class="apartCijena">from<span class="odE"> 100 &euro; </span>/night</p>';
        
    }
                
                if($_GET['lang'] == "ru"){
         echo ' <a href="../apartmani/?apartman=Apartman8?lang=en">
                <h5>Апартамент №8</h5>
                </a>
                <p>3 кровати</p>
                <p class="apartCijena">from<span class="odE"> 100 &euro; </span>/ночь</p>';
        
    }
        
   
        ?>
                
               
            </div>
              </div>
        </div>
        


        










    </div>
</div>
