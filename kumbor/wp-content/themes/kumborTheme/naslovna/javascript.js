//     var $active 
//     var $next


function fadeCrossSlajdova1(){
    var $active = $(".sajt1> a:nth-child(1)  >  div:nth-child(1) > .active1"); //pocetni
    
    var $next = $active.next().length > 0 ? $active.next() : $('.sajt1>a:nth-child(1)>div>.slajd1'); 
    
      $next.css('z-index',2); //priprema, ide iznad ostalih
    
      $active.fadeOut(1000,function(){
          
	  $active.css('z-index',1);
	  $active.show();
      $active.removeClass('active1'); 
      $next.css('z-index', 3).addClass('active1');
         //ovaj slajd postaje vidljiv
      });
}

function fadeCrossSlajdova2(){
    var $active = $(".sajt2> a:nth-child(1)  >  div:nth-child(1) > .active2");
    
    var $next = $active.next().length > 0 ? $active.next() : $('.sajt2>a:nth-child(1)>div>.slajd1'); 
    
      $next.css('z-index',2); 
    
      $active.fadeOut(1000,function(){
          
	  $active.css('z-index',1);
	  $active.show();
      $active.removeClass('active2'); 
      $next.css('z-index', 3).addClass('active2');
         
      });
}

function fadeCrossSlajdova3(){
    var $active = $(".sajt3> a:nth-child(1)  >  div:nth-child(1) > .active3");
    
    var $next = $active.next().length > 0 ? $active.next() : $('.sajt3>a:nth-child(1)>div>.slajd1'); 
    
      $next.css('z-index',2); 
    
      $active.fadeOut(1000,function(){
          
	  $active.css('z-index',1);
	  $active.show();
      $active.removeClass('active3'); 
      $next.css('z-index', 3).addClass('active3');
        
      });
}


function fadeCrossSlajdova4(){
    var $active = $(".sajt4> a:nth-child(1)  >  div:nth-child(1) > .active4");
    
    var $next = $active.next().length > 0 ? $active.next() : $('.sajt4>a:nth-child(1)>div>.slajd1'); 
    
      $next.css('z-index',2); 
    
      $active.fadeOut(1000,function(){
          
	  $active.css('z-index',1);
	  $active.show();
      $active.removeClass('active4'); 
      $next.css('z-index', 3).addClass('active4');
          
      });
}


function fadeCrossSlajdova5(){
    var $active = $(".sajt5> a:nth-child(1)  >  div:nth-child(1) > .active5");
    
    var $next = $active.next().length > 0 ? $active.next() : $('.sajt5>a:nth-child(1)>div>.slajd1'); 
    
      $next.css('z-index',2); 
    
      $active.fadeOut(1000,function(){
          
	  $active.css('z-index',1);
	  $active.show();
      $active.removeClass('active5'); 
      $next.css('z-index', 3).addClass('active5');
         
      });
}


function fadeCrossSlajdova6(){
    var $active = $(".sajt6> a:nth-child(1)  >  div:nth-child(1) > .active6");
    
    var $next = $active.next().length > 0 ? $active.next() : $('.sajt6>a:nth-child(1)>div>.slajd1'); 
    
      $next.css('z-index',2); 
    
      $active.fadeOut(1000,function(){
          
	  $active.css('z-index',1);
	  $active.show();
      $active.removeClass('active6'); 
      $next.css('z-index', 3).addClass('active6');
          
      });
}




//------parametri vremena za slajdere-------



var $vrijeme1 = 5000;    

if (window.innerWidth > 1200){
    $vrijme1 = 6000;

}



$(document).ready(function(){
//// ako je lg ekran, animacija je malo sporija
 $interval1= setInterval(fadeCrossSlajdova1, $vrijeme1);
       
    
    function interval2SaZadrskom(){
        $interval2= setInterval(fadeCrossSlajdova2, $vrijeme1);
    }
   

    
    function interval3SaZadrskom(){
        $interval3 = setInterval(fadeCrossSlajdova3, $vrijeme1);
    }
    
    function interval4SaZadrskom(){
        $interval4 = setInterval(fadeCrossSlajdova4, $vrijeme1);
    }
    
    function interval5SaZadrskom(){
        $interval5= setInterval(fadeCrossSlajdova5, $vrijeme1);
    }
    
    function interval6SaZadrskom(){
        $interval6 = setInterval(fadeCrossSlajdova6, $vrijeme1);
    }
    
  

  
$drugiSajt = setTimeout(interval2SaZadrskom, 1000);
$treciSajt = setTimeout(interval3SaZadrskom, 2000);
$cetvrtiSajt = setTimeout(interval4SaZadrskom, 1500);
$petiSajt = setTimeout(interval5SaZadrskom, 500);
$sestiSajt = setTimeout(interval6SaZadrskom, 250);
//    
//    


});

console.log(window.innerWidth);


