<?php /*

Template Name: oNamaStrana

*/

?>


<?php get_header();   ?>



             


<div class="oNamaStr-okvir">

<div class="dio-rasko">
<div class="raskoSlika"><img src='<?php echo get_template_directory_uri(); ?>/slike/Rasko.jpg'></div>



<div class="raskoObracanje">
    
    
    <p class="obracanje"><span class="postovani">
        
        <?php
     if (!isset($_GET['lang'])){
       echo 'Poštovani,</span> <br>
    
    veliko mi je zadovoljstvo što ste nam poklnili povjerenje i za svoj odmor odabrali upravo Kumbor i porodicu Batrićević.<br>
    Već decenijama, moja porodica se trudi da opravda povjerenje gostiju i činimo sve što je u našoj moći da gosti budu zadovoljni, te da nadaleko prenesu dobar glas o bokeškoj gostoprimljivosti i ljubaznosti: za sada, kažu, uspjeva nam, a  učinićemo sve da tako ostane i ubuduće.<br>
    Kumbor je malo mjesto u Bokokotorskom zalivu, ušuškano između obronaka Orjena sa jedne i Bokokotorskog zaliva i poluostrva Luštica sa druge strane i kao takav predstavlja idealno mjesto za miran odmor. Za one koji vole da odmor provedu u razgledanju, na desetak minuta vožnje se nalazi istorijsko jezgro Herceg Novog, dok se na drugoj strani, ka istoku, nalazi Kotor, još jedan biser naše obale.<br><br> 
        
    Godine iskustva su za nama, ali one ne znače mnogo ukoliko ostanu samo prošlosti. Zato, svaki novi gost je za nas izazov, a tek kada Vas budemo vidjeli narednih godina kako nam se zadovoljni vraćate, bićemo sigurni da nismo zaboravili ono u čemu smo najbolji - da učinimo sve da Vaš odmor prođe mirno i u najboljem mogućem redu.<br>
    
    Ukoliko Kumbor nije mjesto na kom želite da provedete odmor, predlažemo da pogledate prezentacije drugih objekata iz grupe Apartmana Batrićević, kao i objekte naših najbližih prijatelja. 
    
    </p>
    
    <h4>Dobro nam došli!</h4>'; 
    } 
    if($_GET['lang'] == "en"){
         echo "Dear guest,</span> <br>
    
    It's a great pleasure that you have chosen Kumbor and Apartments Batrićević as a location for your vacations.<br>
    For decades, my family is involved in tourism industry and our big experience is one of guatantees that your time will be spent as it should be. The other ones are combination of personal touch, our remarkable people, quiet location in the heart of the bay and modern equiped property on sea shore. All this makes an unique and authentic Boka Bay experience.<br>
    Kumbor is a small place situated between sea and Luštica penincula on one, and Orjen Mountain on the other side. It represents ideal location for those who want to spend vacations on quiet place, but still not far from the other interesting places on our coast: Herceg Novi with its Old Town is a few kilometres to the west, and on the east is Kotor, also easily reachable by car or bus.<br><br> 
        
    We are aware how precious your time is and we are on your service 24/7. Every guest is a new chalange for us and we are satisfied only if You are satisfied too. We also know that satisfied guest is loyal guest and therefore, we will do anything for our guests and hopefully, we will host you again in the future. <br><br>
    
    If Kumbor is not place that You like to spend your holiday in, please feel free to look web presentations of other residences of Apartments Batrićević group, or residences of our close friends. 
    
    </p>
    
    <h4>We look forward to your stay!</h4>";
        
    } 
    if($_GET['lang'] == "ru"){
         echo "Уважаемые,</span> <br>
    
    Очень приятно, что Вы отнеслись к нам с доверием и что местом своего отдыха выбрали как раз Кумбор и семью Батричевичей. <br>
    Уже десятилетиями моя семья старается оправдать доверие гостей и мы делаем все, чтобы наши гости уехали с приятными впечатлениями и рассказали о гостеприимности и вежливости жителей Боки; пока, говорят, мы в этом успеваем и постараемся, чтобы было еще лучше. <br>
    Кумбор – это местечко в Бока-Которском заливе, расположенное между склонами Орьена, с одной, и Бока-Которского залива и полуострова Луштица, с обратной стороны.Тем самым местечко является идеальной дестинацией для спокойного отдыха.<br><br> 
        
    Поскольку Кумбор по каким-либо причинам не является местом в котором Вы захотели бы провести свой отдых, предлагаем посмотреть презентации остальных объектов из Апартаментов Батричевичей, а также и объекты наших близких друзей. <br><br>
    
    
    </p>
    
    <h4>Добро пожаловать!</h4>";
        
    }
    
  ?>
    
    <div class="potpis"><?php
     if (!isset($_GET['lang'])){
       echo 'Radomir Batrićević'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'Radomir Batrićević';
        
    }
 if($_GET['lang'] == "ru"){
         echo 'Радомир Батричевич';
        
    }
    
  ?></div>
    
    
    
    
    
    </div>

</div>



  
  <div class="oNamaFeed">
    
      <div class="oNamaMapa">
    <div id="map"></div>
      </div>

    <div class="oNamaFb">
      
   <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbelvederehn&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
      
      
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