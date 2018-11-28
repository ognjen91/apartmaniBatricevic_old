<div class="motiv">

<?php
    if (!isset($_GET['lang'])){
       echo '<h2>10% sniženje</h2>
<h3>za rezervacije preko sajta</h3>  '; 
    } 
    if($_GET['lang'] == "en"){
         echo '<h2>10% off</h2>
<h3>for reservations from this site</h3>  ';
        
    }
     if($_GET['lang'] == "ru"){
         echo '<h2>Получите Скидку 10%</h2>
<h3>при бронировании с сайта</h3>  ';
        

    }
  ?>    
    
  

</div>


<div class="ramZaDostupnost" id="ramZaDostupnost">
    
     

    <div class="checked">
        <div class="ch-pic"><img src='<?php echo get_template_directory_uri(); ?>/slike/checked.png'></div>
        <div class="ch-text">
            <?php
    if (!isset($_GET['lang'])){
       echo 'PROVJERA <br> DOSTUPNOSTI</div>
    </div>'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'CHECK <br> AVAILABILITY</div>
    </div>';
        
    }
            if($_GET['lang'] == "ru"){
         echo 'ДОСТУПНОСТЬ</div>
    </div>';
        
    }
    
  ?> 


    <div class="availability">

        <div class="arrival">
            <div class="arr-date">
                <div class="danIgodina">
                    <div class="arr-day">DD</div>
                    <div class="arr-month">MM</div>
                </div>
                <div class="arr-year">YY</div>
            </div>
            <div class="kalend-sl" id="kalend-sl"><img src='<?php echo get_template_directory_uri(); ?>/slike/kalendar.png'></div>
        </div>



        <div class="departure">
            <div class="dep-date">
                <div class="danIgodina">
                    <div class="dep-day">DD</div>
                    <div class="dep-month">MM</div>
                </div>
                <div class="dep-year">YY</div>
            </div>
            <div class="kalend-sl"><img src='<?php echo get_template_directory_uri(); ?>/slike/kalendar.png'></div>
        </div>
        
        
<div class="kalendar-arr">
    <div class="closeMe">X</div>
    <h4 class="naslovKalendara"><?php
    if (!isset($_GET['lang'])){
       echo 'Datum dolaska'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'Arrival date';
        
    }
 if($_GET['lang'] == "ru"){
         echo 'Дата прибытия';
        
    }
    
  ?></h4>
    
    <div class="navigacija">
    <div class="prethodniArr"><img src='<?php echo get_template_directory_uri(); ?>/slike/arrow.png'></div>
    <div class="trenutniMjesecArr"></div>
    <div class="trenutnaGodinaArr"></div>
    <div class="naredniArr"><img src='<?php echo get_template_directory_uri(); ?>/slike/arrow.png'></div>
    </div>
    <div class="kalendarArr-show"></div>
</div>

        <div class="kalendar-dep">
    <div class="closeMe">X</div>
    <h4 class="naslovKalendara"><?php
    if (!isset($_GET['lang'])){
       echo 'Datum odlaska'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'Departure date';
        
    }
 if($_GET['lang'] == "ru"){
         echo 'Дата отбытия';
        
    }
    
  ?></h4>
    
    <div class="navigacija">
    <div class="prethodniDep"><img src='<?php echo get_template_directory_uri(); ?>/slike/arrow.png'></div>
    <div class="trenutniMjesecDep"></div>
    <div class="trenutnaGodinaDep"></div>
    <div class="naredniDep"><img src='<?php echo get_template_directory_uri(); ?>/slike/arrow.png'></div>
    </div>
    <div class="kalendarDep-show"></div>
</div>

    </div>
    <div class="checkMe" id="checkMe"><?php
    if (!isset($_GET['lang'])){
       echo 'PROVJERI!'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'CHECK!';
        
    }
 if($_GET['lang'] == "ru"){
         echo 'Проверь!';
        
    }
    
  ?></div>
</div>
