<?php 
   
   //ubacivanje CSS, JS, bootstrap, jquery, setup theme features

   function kumborTheme_script_enqueue(){
       
   wp_enqueue_style('customstyle', get_template_directory_uri() . "/outputCSS/kumborTheme.css", array(), '1.0.0', 'all');
       
    wp_enqueue_script('customjs', get_template_directory_uri() . "/JS/kumborTheme.js", array(), '1.0.0', true);
       
   wp_localize_script( 'customjs', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

       
      }

add_action( 'wp_ajax_poziv_cijenovnika', 'fja_poziv_cijenovnika' );
add_action( 'wp_ajax_nopriv_poziv_cijenovnika', 'fja_poziv_cijenovnika' ); 

function fja_poziv_cijenovnika(){
    include  get_template_directory() . '/Kalendar/cijenovnik.php';
    die();
   
}







   function kumborTheme_setup(){
       add_theme_support('menus');
       register_nav_menu ('primary', 'Primary Navigation');
       register_nav_menu('mobile', 'Mobile Navigation');
       register_nav_menu('zaglavlje', 'Zaglavlje navigation');
   }


   function add_jquery(){
       wp_enqueue_script('jquery');
   }
    //post formats


    

 




    //hookovi
    add_action("wp_enqueue_scripts", "kumborTheme_script_enqueue");
    add_action("after_setup_theme", "kumborTheme_setup");
    add_action("wp_enqueue_scripts", "add_jquery");

   //theme features


    add_theme_support('post-thumbnails');
   

  //podesavanje single.php



// function get_custom_cat_template($single_template) {
//     global $post;
// 
//       if ( in_category( 'Fairytales' )) {
//          $single_template = dirname( __FILE__ ) . '/single-fairytales.php';
//     }
//     if ( in_category( 'Portfolio' )) {
//          $single_template = dirname( __FILE__ ) . '/single-portfolio.php';
//     }
//     return $single_template;
//}
// 
//add_filter( "single_template", "get_custom_cat_template" ) ;
// 
 





















?>