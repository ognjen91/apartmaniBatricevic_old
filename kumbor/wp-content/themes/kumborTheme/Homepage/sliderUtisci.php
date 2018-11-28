<div class="najavaUtisaka">

    <?php
    if (!isset($_GET['lang'])){
       echo '<h3 class="naslovZaUtiske">20 godina iskustva</h3>
<h4 class="najavaZaUtiske">kao garancija Vašeg zadovoljstva</h4>'; 
    } 
    if($_GET['lang'] == "en"){
         echo '<h3 class="naslovZaUtiske">Decades of experience</h3>
<h4 class="najavaZaUtiske">guarantee for Your pleasure</h4>';
        
    }
    
  ?>
    

</div>
    
<div class="sliderUtisci">


    
    

    <div class="utisci">
       
        <div class="utisak">
           <a class="aTest" href="https://www.booking.com/hotel/me/apartmani-batricevic.sr.html" >
            <div class="guestPic"><img src='<?php echo get_template_directory_uri(); ?>/slike/gosti/eva.jpg'>
            </div>
            
            <div class="testimonial">
            <p><span class="fullTest">I spent 8 wonderful days at Batricevic Aparments with my friends and 3 small children and it was a perfect choice for us.</span> The private beach is very comfortable, the host was very helpful and friendly, I can recommend this place for everyone.<span class="fullTest">Big advantage is also a supermarket on the other side of the street.</span></p>
                
                 <p class="gost">Ewa, <span class="mjesto">Poland</span></p>
            </div>
          </a>  
        </div>
        
        
        
        
         <div class="utisak">
           <a class="aTest" href="https://www.booking.com/hotel/me/apartmani-batricevic.sr.html" > 
            <div class="guestPic"><img src='<?php echo get_template_directory_uri(); ?>/slike/gosti/ekatarina.jpg'>
            </div>
            
            <div class="testimonial">
            <p>Very friendly host, comfortable apartments, toys for children, good beach with chaise-longues and umbrellas, comfortable patio with table and chairs, parking right near the apartments.<span class="fullTest">Towels for shower, face, for beach, bed linen very good. No noise at all, caffe and market nearby.</span></p>
                
                <p class="gost">Ekatarina,<span class="mjesto">Russia</span></p>
                
            </div>
             </a>  
        </div>
        
        
        
         <div class="utisak">
            <a class="aTest" href="https://www.booking.com/hotel/me/apartmani-batricevic.sr.html" >
            <div class="guestPic"><img src='<?php echo get_template_directory_uri(); ?>/slike/gosti/martin.png'>
            </div>
            
            <div class="testimonial">
            <p>Comfortable Appartment directly at the seaside. Friendly and helpful host family. Quiet, clean. Nice, little beach with great view.</p>
                
                <p class="gost">Martin,<span class="mjesto">Germany</span></p>
            </div>
             </a>  
        </div>
      


    </div>








</div>
<div class="navigationUtisci">
        <div class="kruzic aktivno">O</div>
        <div class="kruzic">O</div>
        <div class="kruzic">O</div>
        </div>

<style>
    .sliderUtisci {
        background: 
    /* top, transparent red, faked with gradient */ 
    linear-gradient(
      rgba(129, 115, 115, 0.45), 
      rgba(100, 85, 85, 0.45)
    ), url('<?php echo get_template_directory_uri(); ?>/slike/plaza-utisci.jpg');
    background-repeat: no-repeat;
    background-size: cover;
        background-position:  center;

      
    }

</style>
