<?php /*

Template Name: Apartmani

*/

?>







<?php

if (isset($_GET["apartman"])){
    
   require get_template_directory() . "/Apartmani/apartmaniOdabrano.php";
    
} else {
    require get_template_directory() . "/Apartmani/apartmaniPocetna.php";
}

?>







