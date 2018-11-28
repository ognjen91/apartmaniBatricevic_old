 <div class="uvodMob">

        <p class="uvodTekst">
             <?php
     if (!isset($_GET['lang'])){
       echo 'Poštovani, <br>
        dobrodošli na portal posvećen apartmanima nas i naših najbližih. <br> Molimo vas, odaberite objekat koji vam najviše odgovara, a mi ćemo učiniti sve da poželite da nam se vratite kao i mnogi do sada.<br>
        </p>
        
        <p class="potpisPozdrav">Srdačno, </p>
        <p class="potpis"> 

    porodica Batrićević'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'Dear guest, <br>
         Welcome to web presentation of Batrićević and Friends Apartments. <br> We are located on a various locations all over Herceg Novi. Please select location that you like and we will do anything for Your plasant stay.<br>
        </p>
        
        <p class="potpisPozdrav">Sincerely, </p>
        <p class="potpis"> 

    Batrićević Family'; 
     } 
    if($_GET['lang'] == "ru"){
        echo 'Уважаемые господа, <br>
         Добро пожаловать на портал, посвященный нашим  апартаментам.<br> Пожалуйста, выберите наиболее подходящий Вам объект и мы сделаем все, чтобы вы захотели снова вернуться к нам.<br>
        </p>
        
        <p class="potpisPozdrav">С  уважением, </p>
        <p class="potpis"> 

    семья Батричевичей'; 
     }
    
    
  ?>
        
            
            </p>
    
    </div>
       
    <div class="uvodEkr">
        <p class="uvodTekst">  <?php
     if (!isset($_GET['lang'])){
       echo 'Izaberite lokaciju, a mi ćemo učiniti sve da nam se vratite, kao i mnogi do sada '; 
    } 
    if($_GET['lang'] == "en"){
         echo 'Small Group Private Accommodation<br>Please select location';
        
    }
            if($_GET['lang'] == "ru"){
         echo 'Выберите место, и мы сделаем все, чтобы вы вернулись к нам еще раз';
        
    }
    
  ?></p>
        
    </div>