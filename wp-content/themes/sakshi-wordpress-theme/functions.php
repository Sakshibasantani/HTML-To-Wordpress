<?php

function add_css()



{

    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false,'1.1','all');
 
    wp_enqueue_style( 'bootstrap');

      wp_register_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', false,'1.1','all');
 
    wp_enqueue_style( 'responsive');

      wp_register_style('scrollbar', get_template_directory_uri() . '/assets/css/jquery.mCustomScrollbar.min.css', false,'1.1','all');
 
    wp_enqueue_style( 'scrollbar');
    wp_register_style('style2', get_template_directory_uri() . '/assets/css/style.css', false,'1.1','all');
 
    wp_enqueue_style( 'style2');
 
 }


 
add_action('wp_enqueue_scripts', 'add_css');


function add_script()
{
   wp_register_script('js-script', get_template_directory_uri() . '/assets/js/jquery.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script');

   

   wp_register_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'popper');

   wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'bootstrap');

   wp_register_script('query' , get_template_directory_uri() . '/assets/js/jquery-3.0.0.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script('query');

   wp_register_script('plugin', get_template_directory_uri() . '/assets/js/plugin.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'plugin');

}


add_action('wp_enqueue_scripts', 'add_script');

add_theme_support( 'menus' );

add_theme_support( 'post-thumbnails' );
