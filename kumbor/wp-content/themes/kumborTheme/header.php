<!DOCTYPE html>

<html>

<head>
    <link rel="shortcut icon" type="image" href="<?php echo get_template_directory_uri(); ?>/slike/logobig.png" />
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Apartmani Batrićević Kumbor Montenegro </title>
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    
    
    
</head>

<body>
  

         <header>


             <?php wp_nav_menu(array('theme_location' => 'top')); ?>
             
 
             
<div class="logo"><a href="/kumbor"><img src='<?php echo get_template_directory_uri(); ?>/slike/logo_white.png'></a></div>
   
             
             
             <div class="hamburger"><img src='<?php echo get_template_directory_uri(); ?>/slike/menu.png'></div>

  <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
           

 </header>
  <body>
     

        
    
    
    
<!--  --- PRELAZ IZMEDJU SAJTOVA------->

    <?php 
    require get_template_directory() . "/shalt.php"  
?>
      
    <!--mobilni menu koji stoji sa strane i ulazi klikom na hamburger menu-->

             <?php wp_nav_menu(array('theme_location' => 'mobile')); ?>