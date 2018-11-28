<?php

$lokacijaDatoteke = get_template_directory_uri();

echo "

   

 <div class='dostupnaSoba'>
       
     
       
       
       <div class='slikaSobeOpis'>
       <div class='opisno'> <a class='imeSobeOpis ' href='$link'><h3 class='imeSobeOpis'>$punoIme</h3></a>
       
      <div class='lezajevi'>
       $brojLezaja ";

if (!isset($_GET['lang'])){
       echo 'ležaja'; 
    } 
    if($_GET['lang'] == "en"){
         echo 'beds';
        
    }
echo "
       </div> </div>

       <img src=' $lokacijaDatoteke/$linkSlike' alt='Slika izlistane sobe'>
       
       
       </div>
       
       <div class='tekstOpis'>
       <p>$opisTekst</p>
     
       </div>
       

       
       
       <div class='linkOpis'><a href='$link'>POGLEDAJTE SOBU</a></div>
       
     
          
     
       </div>";







?>














   </div>
     
     
     
     
     
     
     
     
     
     
     
     
     












