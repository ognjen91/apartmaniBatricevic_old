<div class="oNamaHome">

    <div class="oNama1">
        <div class="oNamaSl1">

            <img src='<?php echo get_template_directory_uri(); ?>/slike/napolju.jpg'>

        </div>


 <?php
    if (!isset($_GET['lang'])){
       echo '        <div class="oNamaT1">

        <h2>O nama</h2>
        <p>Naša priča ima miris mora i Boke.</p>
        <p>Smješteni u mirnom kraju Bokokotorskog zaliva, Apartmani Batrićević predstavljaju
        idealno mjesto za bezbrižan porodični odmor u prijateljskoj mediteranskoj atmosferi. Kod nas ćete osjetiti šta znači tradicionalno bokeško gostoprimstvo i zaljubiti se u sve što ima veze sa Kraljicom jadrana.    
        
        </p>

        <a href="o-nama"><div class="idiNaONama">VIŠE O NAMA</div></a>
        </div>
    </div>


    <div class="oNama2 oNama1">

<div class="prviDio">

        <div class="oNamaT2">

            <h2>Čekamo Vas</h2>
            <p>Naša misija je jasna: obezbjediti da Vaš odmor prođe baš onako kako treba, da osjetite da ste među prijateljima i da poželite na nam se vraćate još mnogo godina.<br> Imamo sve uslove da našu misiju i ispunimo.
        </p>
           </div> '; 
    } 
        
        
    if($_GET['lang'] == "en"){
         echo '        <div class="oNamaT1">

        <h2>About us</h2>
        <p>Our story smells like sea and winds that come from Mount Lovćen.</p>
        <p>Situated if quiet part of The Bay f Kotor, Apartments Batrićević are perfect place for carefree and relaxing stay. Here you will find out why people of Montenegro are famous for their hospitality and the most important, you will fall in love with the Bay.    
        
        </p>

       <a href="about-us/?lang=en"> <div class="idiNaONama">MORE ABOUT US</div>
        </div></a>
    </div>


    <div class="oNama2 oNama1">

<div class="prviDio">

        <div class="oNamaT2">

            <h2>We are waiting for you</h2>
            <p>Our mission is clear: provide anything that is necessary for your stay, so that you feel that you are among friends and to see you again in the future.<br> We will work hard to accomplish our mission.
        </p>
           </div> ';
        
    }
        
        if ($_GET['lang'] == "ru"){
       echo '        <div class="oNamaT1">

        <h2>О нас</h2>
        <p>Наша история - это запах моря и Боки.</p>
        <p>Апартаменты Батричевич расположены в тихой части Кока-Которского залива. Это идеальное место для беззаботного семейного отдыха в дружеской средиземноморской атмосфере. С нами Вы почувствуете, что значит традиционное гостеприимство и полюбите все, что связано с королевой Адриатики.    
        
        </p>

        <a href="o-nama/?lang=ru"><div class="idiNaONama">О НАС</div></a>
        </div>
    </div>


    <div class="oNama2 oNama1">

<div class="prviDio">

        <div class="oNamaT2">

            <h2>Мы Вас ждем</h2>
            <p>Наша миссия понятна: обеспечить, чтобы ваш отдых прошел великолепно, чтобы вы почувствовали, что находитесь среди друзей и чтобы у вас возникло желание посетить нас еще раз. У нас есть все условия для выполнения этой миссии.
        </p>
           </div> '; 
    } 
        
   
        ?>

        
        
          <div class="oNamaSl2">

            <img src='<?php echo get_template_directory_uri(); ?>/slike/napolju2.jpg'>

        </div>
        
        
        
      </div>  
        
        
        
        
            <div class="features">
            <div class="feature">
                <div class="featpic"><img src='<?php echo get_template_directory_uri(); ?>/slike/icons/kitchen.png'></div><div class="feattext">
 <?php
    if (!isset($_GET['lang'])){
       echo 'Kuhinja'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'Kitchen';
        
    }
 if($_GET['lang'] == "ru"){
         echo 'Кухня';
        
    }
        
   
        ?>
                </div>
            </div>
            
            <div class="feature">
                <div class="featpic"><img src='<?php echo get_template_directory_uri(); ?>/slike/icons/bath.png'></div><div class="feattext">
 <?php
    if (!isset($_GET['lang'])){
       echo 'Kupatilo'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'Bathroom';
        
    }
    if($_GET['lang'] == "ru"){
         echo 'Ванная';
        
    }            
        
   
        ?>
                </div>
            </div>
            
            <div class="feature">
                <div class="featpic"><img src='<?php echo get_template_directory_uri(); ?>/slike/icons/air-cond.png'></div><div class="feattext"><?php
    if (!isset($_GET['lang'])){
       echo 'Klima'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'Air conditioner';
        
    }
   if($_GET['lang'] == "ru"){
         echo 'Кондиционер';
        
    } 
  ?>
                </div>
            </div>
            
            <div class="feature">
                <div class="featpic"><img src='<?php echo get_template_directory_uri(); ?>/slike/icons/wifi.png'></div><div class="feattext">Wi-Fi
                </div>
            </div>
            
            <div class="feature">
                <div class="featpic"><img src='<?php echo get_template_directory_uri(); ?>/slike/icons/tv.png'></div><div class="feattext">TV
                </div>
            </div>
            
            <div class="feature">
                <div class="featpic"><img src='<?php echo get_template_directory_uri(); ?>/slike/icons/wa-machi.png'></div><div class="feattext"><?php
    if (!isset($_GET['lang'])){
       echo 'Veš mašina'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'Washing machine';
        
    }
     if($_GET['lang'] == "ru"){
         echo 'Стиральная машина';
        
    }           
    
  ?>
                </div>
            </div>
                </div>
        
  

        
        










</div>

    <div class="videoSnimak">

<video width="400" controls>
  <source src='<?php echo get_template_directory_uri(); ?>/slike/video.mp4' type="video/mp4">
  
  Your browser does not support HTML5 video.
</video>

    </div>










</div>
