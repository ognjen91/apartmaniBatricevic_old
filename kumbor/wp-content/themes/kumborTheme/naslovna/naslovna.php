<?php /*

Template Name: naslovna

*/

?>



<!DOCTYPE html>

<html>
    
<head>
<title>APARTMANI BATRIĆEVIĆ</title> 
<link href="<?php echo get_template_directory_uri() ?> /naslovna/styleNaslovna.css" type="text/css" rel="stylesheet">
 <meta charset="UTF-8"/>   
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rozha+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Italianno" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
</head>
  
            
  <style>      
    body {
         background: url('<?php echo get_template_directory_uri() ?>/naslovna/pozadina2.png') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
/*      background-color:   ;*/
/*        background-color: #6DB3F2;*/
          display: block;
  position: relative; 
        background-color: khaki;
      }
      
      
      body::after {
  content: "";
  background: url(image.jpg);
  opacity: 0.5;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
  z-index: -1;   
}
       </style>   
    
<body>
<div class="wrap">


    
    
    
    
    
    
         
         <div class="logoAndLang">
        <div class="logo">  
         <img src="<?php echo get_template_directory_uri(); ?>/naslovna/logo.png" class="logoSlika">
         </div>   
             
             <div class="jezici">
    <a class="srpski" href="http://apartmanibatricevic.com"><img src='<?php echo get_template_directory_uri() ?>/naslovna/serbia-flag.png' alt='serbian'></a>
                 
    <a class="ruski" href="http://apartmanibatricevic.com?lang=ru"><img src='<?php echo get_template_directory_uri() ?>/naslovna/russia-flag.png' alt='russian'></a>
                 
                 
    <a class="engleski" href="http://apartmanibatricevic.com?lang=en"><img src='<?php echo get_template_directory_uri() ?>/naslovna/uk-flag.png' alt='english'></a>
   
    
    </div>
         </div>
    
    
    
    
   <?php require get_template_directory() . "/naslovna/uvod.php";   ?>
    
    
     <div class="sajtovi">
         
         
<!--        ---------------KUMBOR----------->
         
         
        <?php
         require  get_template_directory() . "/naslovna/apKumbor/sajt.php";  
      
         ?>  
         
         
 <!--        ---------------BELVEDERE----------->
         
         
        <?php
         require  get_template_directory() . "/naslovna/apBelvedere/sajt.php"; 
         ?> 
         
           
         
         
 <!--        --------------BOKA 1----------->
         
         
        <?php
         require  get_template_directory() . "/naslovna/apBoka/sajt.php";  
         ?>  
         
         
 <!--        ---------------BOKA2----------->
         
         
         <?php
         require  get_template_directory() . "/naslovna/apBoka2/sajt.php";  
         ?>   
         
         
 <!--        ---------------MITROVIC----------->
         
         
        <?php
         require  get_template_directory() . "/naslovna/mitrovic/sajt.php";   
         ?>  
         
         
 <!--        ---------------GH22----------->
         
         
        <?php
         require  get_template_directory() . "/naslovna/gh22/sajt.php";   
         ?>
         
         
 
    
    </div>
         
</div>

<script src="<?php echo get_template_directory_uri() ?>/naslovna/javascript.js"></script>
    </body>    
</html>