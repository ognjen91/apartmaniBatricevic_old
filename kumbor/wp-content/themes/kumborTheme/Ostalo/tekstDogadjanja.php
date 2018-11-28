<h2 class="naslov-dogadjaj"><?php
     if (!isset($_GET['lang'])){
       echo 'PRVI MAJ'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'FIRST OF MAY';
        
    }
    
  ?></h2>

<p class="tekst-dogadjaj">


    <?php
     if (!isset($_GET['lang'])){
       echo 'Prvi maj, praznik rada, je posljednjih godina dan koji se koristi za opuštanje u prirodi, iako mu to nije prvobitni smisao. <br>
       Dan borbe za radnička prava, danas je dan kada zaboravljamo na svakodnevnicu i provodimo vrijeme uz prijatelje, tradicionalno pripremjenu hranu i pokoju čašicu.<br><br>
       
       Apartmani Batrićević su spremili posebnu ponudu za ovaj praznik: 
       20% sniženo na prve dvije rezervacije. Provedite Prvi maj u divnoj prirodi Boke Kotorske, uz zvuke talasa i miris mora.<br>
       
       Čekamo vas!
       '; 
    } 
    if($_GET['lang'] == "en"){
         echo "On First of May, international workers day, present-day
         people of Balkans spend time in nature, altough this isn't original purpose of this holiday. <br>
         On this day, we try to relax and be with friends.<br><br>
         
         Apartments Batrićević have special offer for this important day: 20% off for first two reservations. Celebrate May Day in beautiful nature of Boka Bay, among friends.<br>
         
         Hope to see You!";
        
    }
    
    if($_GET['lang'] == "ru"){
         echo "Первое мая – праздник труда, у нас как и во многих других странах с давных пор утратил свой изначальный характер и стал поводом для развлечений в природе. <br><br>
         
         В связи с этим Апартаменты Батричевичей приготовили специальные предложения: 20% скидки на первых два заказа. Проведите Первое мая в прекрасной природе Бока-Которска, под звуки волн и запах моря.<br><br>
         
         Увидимся!";
        
    }
    
  ?>


 
















</p>