<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!--
UNCOMMENT THIS OUT TO USE WITH BOOTSTRAP CSS IN STYLES.CSS
<meta name="viewport" content="width=device-width, initial-scale=1.0">
-->
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
  <?php
    if( ! is_home() ):
      wp_title( '|', true, 'right' );
    endif;
    bloginfo( 'name' );
  ?>
</title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<a href="<?php echo home_url( '/' ); ?>">Home Page</a>
<?php
  // Uncomment to show menu
  // wp_nav_menu( array( 'menu' => 'Main' ) );
?>