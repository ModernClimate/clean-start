<?php

register_nav_menus([ 'primary' => 'Primary Menu']);

register_sidebar([
  'id'   => 'sidebar-1',
  'name' => 'Sidebar'
]);

add_theme_support( 'automatic-feed-links' );

function my_init_method() {
  if( !is_admin() ) {
    wp_enqueue_script( 'jquery' );
    wp_register_style( 'global', get_bloginfo('template_directory') . '/css/global.css');
    wp_enqueue_style( 'global' );
  }
}
add_action( 'init', 'my_init_method' );
