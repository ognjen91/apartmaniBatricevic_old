<?php /*

Template Name: index

*/

?>


<?php get_header();   ?>


             

<?php 
//    require get_template_directory() . "/partsOfHomepage/box-citat.php"  
?>

<!--============= SLAJDER =======================-->
<div class="slider">
   
    <?php
     if (!isset($_GET['lang'])){
       putRevSlider( 'classicslider1' );  
    } 
    if($_GET['lang'] == "en"){
         putRevSlider( 'classic-eng' ); 
         }
    if($_GET['lang'] == "ru"){
         putRevSlider( 'classicslider-ru' );  
         }
    ?>

</div>



<?php  ?>


<!--============= PRIKAZ SOBA NA INDEX PAGE-u =======================-->
<?php 
    require get_template_directory() . "/Homepage/previewSoba.php"  
?>


<!--============= O NAMA =======================-->
<?php 
    require get_template_directory() . "/Homepage/oNama.php"  
?>


<!--============= DOSTUPNOST =======================-->
<?php 
    require get_template_directory() . "/Homepage/provjeraDostupnosti.php"  
?>


<!--============= SLAJDER SA KNJIGOM GOSTIJU =======================-->
<?php 
    require get_template_directory() . "/Homepage/sliderUtisci.php"  
?>



<!--============= NAJAVA DOGAĐANJA =======================-->
<?php 
    require get_template_directory() . "/Homepage/najavaDogadjanja.php"  
?>


<!--============= GALERIJA KAO DIO HOMEPAGEA=======================-->
<?php 
    require get_template_directory() . "/Homepage/galerijaHomepage.php"  
?>


<!--============= FB & dr FEED=======================-->
<?php 
    require get_template_directory() . "/Homepage/socialFeed.php"  
?>



<?php get_footer(); ?>
