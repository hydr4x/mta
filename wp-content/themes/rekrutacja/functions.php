<?php

 define("DEFAULTLANGUAGE", "pl");
 define("DEFAULTLANGUAGECODE", "pl-PL");

//Function for multilanguage support based on ISO 639-1 Language Codes
function lang_support() {
  global $lang, $langCode;
  $lang = DEFAULTLANGUAGE;
  $langCode = DEFAULTLANGUAGECODE;
  if(strpos(get_the_permalink(), "/en/") !== false) {
       $lang = "en";
       $langCode = "en-US";
   }
}

add_action('wp', 'lang_support');

// Registering menus for multiple languages
function register_nav_my_menus(){
       register_nav_menus( array(
           'menu_pl'  => 'Menu PL',
           'menu_en'  => 'Menu EN',
           'menu_lang'  => 'Menu Lang'
       ) );
}
add_action( 'after_setup_theme', 'register_nav_my_menus', 0 );

//Sidebars start----------------------------------------------------------------
function custom_left_sidebar_init() {
register_sidebar( array(
     'name'          => 'Left Sidebar',
     'id'            => 'leftsidebar',
     'before_widget' => ' ',
     'after_widget'  => ' ',
     'before_title'  => ' ',
     'after_title'   => ' ',
 ) );
}
add_action( 'widgets_init', 'custom_left_sidebar_init');

function custom_right_sidebar_init() {
register_sidebar( array(
     'name'          => 'Right Sidebar',
     'id'            => 'rightsidebar',
     'before_widget' => ' ',
     'after_widget'  => ' ',
     'before_title'  => ' ',
     'after_title'   => ' ',
 ) );
}
add_action( 'widgets_init', 'custom_right_sidebar_init');
//Sidebars end------------------------------------------------------------------

//Custom Post Type start--------------------------------------------------------
function create_teams() {
   register_post_type('teams',
   array(
      'labels' => array(
      'name' => ('Teams'), 'singular_name' => ('Team')
   ),
   'public' => true,
   'has_archive' => true,
   'menu_icon' => 'dashicons-groups',
   'rewrite' => array('slug' => 'teams'),
   'taxonomies' => array('post_tag', 'category'),
   'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
));}
add_action('init', 'create_teams');
//Custom Post Type end----------------------------------------------------------
?>
