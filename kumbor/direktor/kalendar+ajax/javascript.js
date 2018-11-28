$(document).ready(

function (){
    
var dan;
var mjesec;
var godina;
var objekat;
var apartman;
var novaPozicijaX;
var novaPozicijaY;
var polaSirinePolja;
var polaVisinePolja; 
    
 function prikaziInfo(){
  $(".datum-info").css("display", "inherit");

}

function sakrijInfo(){
  $(".datum-info").css("display", "none");
}
    
    
if (window.innerWidth > 992){
$(".dostupnost1, .dostupnost0").hover(prikaziInfo, sakrijInfo);
} else {
    $(".dostupnost1, .dostupnost0").click(prikaziInfo);
    $('#iksic').click(sakrijInfo);
}
}) 
    
    
//    ---kada pointer udje u prostor polja datuma, saljem podatke php skriptama
    
    
    $(".dostupnost1, .dostupnost0").mouseenter(function(){

//    console.log($(this).offset().top);
//    console.log($(this).offset().left);
    
    polaSirinePolja = $(this).width()/2;
    polaVisinePolja = $(this).height()/2;
    novaPozicijaY = $(this).offset().top + polaVisinePolja;
    novaPozicijaX = $(this).offset().left + polaSirinePolja;
    
    $("#datum-info").css("top", `${novaPozicijaY}px`);
    $("#datum-info").css("left", `${novaPozicijaX}px`);
    dan = $(this).text();
    mjesec = $(this).parent().find("#mjesec").text();
    objekat = $(this).parent().find("#objekat").text();
    godina = $(this).parent().find("#godina").text();
    apartman = $(this).parent().find("#apartman").text();
        
      console.log(dan);       
      console.log(mjesec);  
      console.log(godina);  
      console.log(objekat);  
      console.log(apartman);  
     


});

    
    
    
    $(".dostupnost1, .dostupnost0").mouseenter(function(){
        
        $.post('cijenovnik.php',
            {
            dan : dan,
            mjesec : mjesec,
            godina : godina,
            objekat : objekat,
            apartman : apartman
        },
            function (data){
            $("#datum-info").html(data);
            function sakrijInfo(){
  $(".datum-info").css("display", "none");
}
            $('#iksic').click(sakrijInfo);
        });
        
          $.post('sljedeciMjesec.php',
            {
            dan : dan,
            mjesec : mjesec,
            godina : godina,
            objekat : objekat,
            apartman : apartman
        },
            function (){
            
            
        });
        
     
        
    
        
          $.post('prethodniMjesec.php',
            {
            dan : dan,
            mjesec : mjesec,
            godina : godina,
            objekat : objekat,
            apartman : apartman
        },
            function (){
            
        });
        
        
        
// ------------kraj slanja podataka----
   
 
    })
    
   
    
//    -----podesavanje plutajuceg prozorcica --------------
    
   

console.log(window.innerWidth);
//    -----kraj podesavanja plutajuceg prozorcica --------------
