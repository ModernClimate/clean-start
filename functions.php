<?php

register_nav_menus( array('primary' => 'Primary Menu') );
register_sidebar( array('name' => 'Sidebar') );

add_theme_support( 'automatic-feed-links' );

function my_init_method() {
    if(!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', get_bloginfo('template_directory') . '/script/compiled/jquery.min.js');
        wp_enqueue_script( 'jquery' );

        wp_register_script('shared', get_bloginfo('template_directory') . '/script/compiled/shared.min.js');
        wp_enqueue_script( 'shared' );
    }
}
add_action('init', 'my_init_method');

?>